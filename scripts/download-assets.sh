#!/bin/bash

# Script to download TRMNL framework assets and Inter font for offline use
# Usage: ./scripts/download-assets.sh [version]
# If no version is specified, all versions (1.0.0, 1.1.0, latest) will be downloaded

# Set the base directories
RESOURCES_DIR="resources"
CSS_DIR="${RESOURCES_DIR}/css"
JS_DIR="${RESOURCES_DIR}/js"
FONTS_DIR="${RESOURCES_DIR}/fonts"
IMAGES_DIR="${RESOURCES_DIR}/images"

# Create directories if they don't exist
mkdir -p "${CSS_DIR}"
mkdir -p "${JS_DIR}"
mkdir -p "${FONTS_DIR}"
mkdir -p "${IMAGES_DIR}"

# Function to download a specific version of the TRMNL framework
download_version() {
    VERSION=$1
    echo "Downloading TRMNL framework version ${VERSION}..."

    # Create version-specific directories
    mkdir -p "${CSS_DIR}/${VERSION}"
    mkdir -p "${JS_DIR}/${VERSION}"
    mkdir -p "${IMAGES_DIR}/${VERSION}"

    # Download CSS and JS files
    echo "  Downloading CSS..."
    curl -s "https://usetrmnl.com/css/${VERSION}/plugins.css" -o "${CSS_DIR}/${VERSION}/plugins.css"

    echo "  Downloading JS..."
    curl -s "https://usetrmnl.com/js/${VERSION}/plugins.js" -o "${JS_DIR}/${VERSION}/plugins.js"

    # Extract and download additional resources referenced in CSS
    echo "  Extracting and downloading additional resources from CSS..."
    extract_and_download_resources "${CSS_DIR}/${VERSION}/plugins.css" "${VERSION}"

    # Update URLs in the CSS file
    echo "  Updating URLs in CSS file..."
    update_css_urls "${CSS_DIR}/${VERSION}/plugins.css"

    echo "  Done downloading version ${VERSION}"
}

# Function to extract and download additional resources referenced in CSS
extract_and_download_resources() {
    CSS_FILE=$1
    VERSION=$2

    # Extract URLs from the CSS file
    # This regex looks for url(...) patterns in the CSS
    URLS=$(grep -o "url([^)]*)" "${CSS_FILE}" | sed -e "s/url(//" -e "s/)//")

    for URL in $URLS; do
        # Remove quotes if present
        URL=$(echo "$URL" | sed -e "s/^['\"]//g" -e "s/['\"]$//g")

        # Skip data URLs
        if [[ "$URL" == data:* ]]; then
            continue
        fi

        # Skip absolute URLs that are not from usetrmnl.com
        if [[ "$URL" == http* && "$URL" != *usetrmnl.com* ]]; then
            continue
        fi

        # Convert relative URLs to absolute URLs
        if [[ "$URL" != http* ]]; then
            if [[ "$URL" == /* ]]; then
                # URL starts with /, it's relative to the domain root
                URL="https://usetrmnl.com${URL}"
            else
                # URL is relative to the CSS file
                URL="https://usetrmnl.com/css/${VERSION}/${URL}"
            fi
        fi

        # Determine the file type and destination directory
        if [[ "$URL" == *.ttf* || "$URL" == *.woff* || "$URL" == *.eot* || "$URL" == *.svg* ]]; then
            DEST_DIR="${FONTS_DIR}"
        elif [[ "$URL" == *.png* || "$URL" == *.jpg* || "$URL" == *.jpeg* || "$URL" == *.gif* || "$URL" == *.svg* ]]; then
            DEST_DIR="${IMAGES_DIR}/${VERSION}"
        else
            # Skip unknown file types
            continue
        fi

        # Extract filename from URL
        FILENAME=$(basename "$URL" | sed -e "s/\?.*//" -e "s/#.*//")

        # Extract path from URL
        if [[ "$URL" == *"usetrmnl.com"* ]]; then
            # For URLs from usetrmnl.com
            if [[ "$URL" == *"/images/"* ]]; then
                # For image URLs, extract the path after /images/
                # This extracts everything between /images/ and the last /
                SUBDIR=$(echo "$URL" | grep -o "/images/.*" | sed -e 's|^/images/||' -e 's|/[^/]*$||')
                if [[ -n "$SUBDIR" ]]; then
                    # Create subdirectory if it doesn't exist
                    mkdir -p "${DEST_DIR}/${SUBDIR}"
                    # Download the file to the subdirectory
                    echo "    Downloading ${SUBDIR}/${FILENAME}..."
                    curl -s "$URL" -o "${DEST_DIR}/${SUBDIR}/${FILENAME}"
                else
                    # No subdirectory, download directly to DEST_DIR
                    echo "    Downloading ${FILENAME}..."
                    curl -s "$URL" -o "${DEST_DIR}/${FILENAME}"
                fi
            else
                # For non-image URLs
                # Create destination directory if it doesn't exist
                mkdir -p "${DEST_DIR}"
                # Download the file
                echo "    Downloading ${FILENAME}..."
                curl -s "$URL" -o "${DEST_DIR}/${FILENAME}"
            fi
        else
            # For other URLs
            # Create destination directory if it doesn't exist
            mkdir -p "${DEST_DIR}"
            # Download the file
            echo "    Downloading ${FILENAME}..."
            curl -s "$URL" -o "${DEST_DIR}/${FILENAME}"
        fi
    done
}

# Function to update URLs in CSS files to include vendor prefix
update_css_urls() {
    CSS_FILE=$1

    echo "    Processing CSS file: ${CSS_FILE}"

    # Create a temporary file
    TEMP_FILE=$(mktemp)

    # Process the CSS file and update URLs
    # This sed command replaces url('/fonts/...) with url('/vendor/trmnl-blade/fonts/...)
    # and url(/fonts/...) with url(/vendor/trmnl-blade/fonts/...)
    # It also handles other paths like /images/ and /css/
    # For images, we need to include the version in the path
    sed -E \
        -e 's|url\((['"'"'"]?)/fonts/|url(\1/vendor/trmnl-blade/fonts/|g' \
        -e 's|url\((['"'"'"]?)/css/|url(\1/vendor/trmnl-blade/css/|g' \
        -e 's|url\((['"'"'"]?)/js/|url(\1/vendor/trmnl-blade/js/|g' \
        "${CSS_FILE}" > "${TEMP_FILE}"

    # For images, we need to handle them separately to preserve subdirectory structure
    # and include the version in the path
    # Create a temporary file for the image URL rewriting
    IMAGE_TEMP_FILE=$(mktemp)
    # This pattern preserves subdirectories after /images/
    sed -E "s|url\\((['\"]?)/images/|url(\\1/vendor/trmnl-blade/images/${VERSION}/|g" "${TEMP_FILE}" > "${IMAGE_TEMP_FILE}"
    mv "${IMAGE_TEMP_FILE}" "${TEMP_FILE}"

    # Replace the original file with the updated one
    mv "${TEMP_FILE}" "${CSS_FILE}"

    echo "    CSS file updated with vendor prefixes"
}

# Function to download Inter font from bunny.net
download_inter_font() {
    echo "Downloading Inter font from bunny.net..."

    # Create a temporary directory for the font files
    TEMP_DIR=$(mktemp -d)

    # Download the Inter font CSS
    curl -s "https://fonts.bunny.net/css?family=Inter:300,400,500" -o "${TEMP_DIR}/inter.css"

    # Extract font URLs from the CSS file
    FONT_URLS=$(grep -o "https://fonts.bunny.net/[^)]*" "${TEMP_DIR}/inter.css")

    # Create the inter.css file with local references
    cat > "${FONTS_DIR}/inter.css" << EOL
/* Inter font from bunny.net */
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 300;
  src: url('Inter-Light.woff2') format('woff2');
}

@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 400;
  src: url('Inter-Regular.woff2') format('woff2');
}

@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  src: url('Inter-Medium.woff2') format('woff2');
}
EOL

    # Download each font file
    for URL in $FONT_URLS; do
        FILENAME=$(basename "$URL")
        echo "  Downloading ${FILENAME}..."
        curl -s "$URL" -o "${FONTS_DIR}/${FILENAME}"

        # Rename the font files to match the references in the CSS
        if [[ "$FILENAME" == *"300"* ]]; then
            cp "${FONTS_DIR}/${FILENAME}" "${FONTS_DIR}/Inter-Light.woff2"
        elif [[ "$FILENAME" == *"400"* ]]; then
            cp "${FONTS_DIR}/${FILENAME}" "${FONTS_DIR}/Inter-Regular.woff2"
        elif [[ "$FILENAME" == *"500"* ]]; then
            cp "${FONTS_DIR}/${FILENAME}" "${FONTS_DIR}/Inter-Medium.woff2"
        fi
    done

    # Clean up
    rm -rf "${TEMP_DIR}"

    echo "  Done downloading Inter font"
}

# Main script execution
if [ $# -eq 0 ]; then
    # No version specified, download all versions
    download_version "1.0.0"
    download_version "1.1.0"
    download_version "latest"
    download_inter_font
else
    # Download the specified version
    download_version "$1"
    download_inter_font
fi

echo "All downloads completed successfully!"

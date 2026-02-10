# Changelog

All notable changes to `trmnl-blade` will be documented in this file.

## 2.3.1 - 2026-02-10

### What's Changed

* feat: bump `TRMNL_BLADE_FRAMEWORK_CSS_VERSION` to 2.3.1 by @github-actions[bot] in https://github.com/bnussbau/laravel-trmnl-blade/pull/10

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/2.3.0...2.3.1

## 2.3.0 - 2026-02-09

### What's Changed

* feat: bump `TRMNL_BLADE_FRAMEWORK_CSS_VERSION` to 2.3.0

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/2.2.1...2.3.0

## 2.2.1 - 2026-02-05

### What's Changed

* added support for separate framework CSS and JS version numbers via `framework_css_version` and `framework_js_version` config (and env `TRMNL_BLADE_FRAMEWORK_CSS_VERSION`, `TRMNL_BLADE_FRAMEWORK_JS_VERSION`). When unset, `framework_version` is used for both assets. Backward compatible.
* Bump default TRMNL Framework versions to
  * CSS: `2.2.1`
  * JS: `2.1.0`
  

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/2.1.1...2.2.1

## 2.1.1 - 2026-01-29

### What's Changed

* chore: update trmnl base url
* chore(deps): bump dependabot/fetch-metadata from 2.4.0 to 2.5.0 by @dependabot[bot] in https://github.com/bnussbau/laravel-trmnl-blade/pull/9

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/2.1.0...2.1.1

## 2.1.0 - 2026-01-02

### What's Changed

* Bump default Framework version to 2.1.0

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/2.0.1...2.1.0

## 2.0.1 - 2025-09-22

### What's Changed

* fix: deprecate `markdown` component (was removed in [TRMNL Framework v2](https://usetrmnl.com/framework)). Use `richtext` instead.

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/2.0.0...2.0.1

## 2.0.0 - 2025-09-14

### What's Changed

* feat(framework): adds compatibility with Framework v2 by @bnussbau in https://github.com/bnussbau/laravel-trmnl-blade/pull/6
  
  * added support for 2-bit, 4-bit screens and Device Variants
    
  * added components
    
    * Progress Bar
    * Divider
    * Aspect Ratio
    * Scale
    
  * For details, see: https://usetrmnl.com/framework
    
  
* chore(deps): bump actions/checkout from 4 to 5 by @dependabot[bot] in https://github.com/bnussbau/laravel-trmnl-blade/pull/5
  

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/1.2.1...2.0.0

## 1.2.1 - 2025-08-11

### What's Changed

* feat: allow custom js/css urls. allows pre-release testing of TRMNL Framework, or self-hosting
* feat: add support for dark mode

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/1.2.0...1.2.1

## 1.2.0 - 2025-07-28

### What's Changed

* Bump default Framework version to 1.2.0

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/1.1.1...1.2.0

## 1.1.1 - 2025-07-14

### What's Changed

* Bump default Framework version to 1.1.1

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/1.1.0...1.1.1

## 1.1.0 - 2025-06-10

### What's Changed

* feat: adds compatibility with TRMNL Design Framework v1.1 by @bnussbau in https://github.com/bnussbau/laravel-trmnl-blade/pull/1

**Full Changelog**: https://github.com/bnussbau/laravel-trmnl-blade/compare/1.0.0...1.1.0

## 1.0.0 - 2025-06-04

Initial release for TRMNL Design Framework v1.0.0

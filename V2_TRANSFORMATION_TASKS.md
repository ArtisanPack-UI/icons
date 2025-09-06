# ArtisanPack UI Icons v2.0 Transformation Tasks

## Overview

This document provides a comprehensive list of tasks required to transform the `artisanpack-ui/icons` package from version 1.x to 2.0, implementing the strategic pivot from a hardcoded icon provider to an extensibility layer for custom icon sets using the `blade-ui-kit/blade-icons` foundation.

**Target Architecture**: Transform the package into an adapter that allows developers to easily register custom SVG icon sets with the Blade UI Kit icons factory.

---

## 1. Architecture & Code Changes

### 1.1 Dependency Management
- [ ] **Update composer.json dependencies**
  - Add `blade-ui-kit/blade-icons` as required dependency
  - Keep `tormjens/eventy` for third-party extensibility support
  - Remove unnecessary dependencies like `ext-fileinfo`
  - Update version number to `2.0.0`
  - Update package description to reflect new purpose
  - Remove facades configuration from extra.laravel section

### 1.2 Core Class Removal
- [ ] **Delete Icons.php class completely**
  - Remove the entire 17,282-line Icons.php file
  - This eliminates the hardcoded array approach and memory issues

### 1.3 Helper Functions Cleanup
- [ ] **Remove helpers.php file**
  - Delete the entire helpers.php file containing deprecated functions
  - Remove helpers.php from composer.json autoload.files section
  - Functions to be removed: `icons()`, `getIcons()`, `iconsLists()`

### 1.4 Facades Cleanup
- [ ] **Remove Facades directory and classes**
  - Delete src/Facades directory completely
  - Remove any icon-related facades

### 1.5 Asset Management Removal
- [ ] **Remove asset serving functionality**
  - Delete dist directory containing CSS and webfonts
  - Remove node_modules and package management files (package.json, package-lock.json)
  - Clean up any Font Awesome assets

---

## 2. Event-Driven Extensibility System

### 2.1 Event Hook Implementation
- [ ] **Create icon set registration event hooks**
  - Implement `artisanpack-ui-icons.register-icon-sets` filter hook
  - Allow third-party developers to register icon sets programmatically
  - Support same icon set structure as config (path, prefix)
  - Enable multiple extensions to register different icon sets

### 2.2 Extension Developer API
- [ ] **Create IconSetRegistration class**
  - Provide structured way to define icon sets for events
  - Include validation for path and prefix parameters
  - Add helper methods for common registration patterns
  - Support both single and batch icon set registration

### 2.3 Event Integration in Service Provider
- [ ] **Integrate eventy with service provider**
  - Add event-driven icon set collection in registerIcons() method
  - Merge config-based and event-driven icon sets
  - Implement conflict resolution between different sources
  - Ensure event-registered sets don't override config sets

---

## 3. New Configuration System

### 3.1 Configuration File Creation
- [ ] **Create config/custom-icons.php**
  - Implement the publishable configuration file as specified in the architecture
  - Include comprehensive documentation within the config file
  - Provide commented examples for common use cases (Font Awesome Pro, custom icons)
  - Define structure for icon sets with 'path' and 'prefix' parameters

### 3.2 Configuration Schema Definition
- [ ] **Define configuration validation rules**
  - Ensure 'sets' array contains valid icon set definitions
  - Validate required 'path' and 'prefix' keys for each set
  - Add path validation to ensure directories exist
  - Implement prefix validation to prevent conflicts

---

## 4. Service Provider Transformation

### 4.1 Complete Service Provider Rewrite
- [ ] **Replace IconsServiceProvider.php completely**
  - Rename to CustomIconsServiceProvider.php
  - Remove asset serving routes and Blade directive functionality
  - Remove mime_content_type method and related functionality
  - Remove Icons singleton registration

### 4.2 Configuration Integration
- [ ] **Implement configuration merging**
  - Add mergeConfigFrom() call in register() method
  - Set up config publishing in boot() method with 'custom-icons-config' tag

### 4.3 Hybrid Icon Registration Logic
- [ ] **Implement registerIcons() method with hybrid approach**
  - Read icon sets from config('custom-icons.sets')
  - Collect event-driven icon sets using `artisanpack-ui-icons.register-icon-sets` filter
  - Merge config-based and event-driven icon sets
  - Implement conflict resolution (config takes precedence over events)
  - Loop through combined sets and register each with BladeIcons Factory
  - Add error handling for invalid configurations from both sources
  - Implement callAfterResolving() for BladeCompiler dependency

### 4.4 Service Provider Registration
- [ ] **Update composer.json service provider**
  - Change provider from IconsServiceProvider to CustomIconsServiceProvider
  - Remove aliases configuration

---

## 5. Documentation Overhaul

### 5.1 README.md Complete Rewrite
- [ ] **Replace entire README.md content**
  - Remove all references to old API (getIcons(), iconsList(), etc.)
  - Explain new purpose as extensibility layer for livewire-ui-components
  - Add clear step-by-step usage guide
  - Include examples of Font Awesome Pro and custom icon integration
  - Document both config-based and event-driven registration methods
  - Update requirements section

### 5.2 Usage Documentation
- [ ] **Create comprehensive usage examples**
  - Step-by-step installation guide
  - Configuration file setup examples
  - Integration with livewire-ui-components examples
  - Custom icon set preparation guidelines
  - Blade component usage examples

### 5.3 Extension API Documentation
- [ ] **Create third-party developer documentation**
  - Document `artisanpack-ui-icons.register-icon-sets` filter hook
  - Provide examples of event-driven icon set registration
  - Show IconSetRegistration class usage patterns
  - Include conflict resolution documentation
  - Add troubleshooting for extension developers

### 5.4 Migration Guide
- [ ] **Create detailed migration documentation**
  - Document breaking changes from v1.x
  - Provide alternatives for deprecated functions
  - Explain new workflow for developers
  - Include troubleshooting section

### 5.5 API Documentation Cleanup
- [ ] **Remove outdated documentation**
  - Delete docs/reference/functions documentation
  - Delete docs/reference/helper-functions documentation
  - Remove docs/guide/blade-directives documentation
  - Update docs/guide/service-provider documentation

### 5.6 New Architecture Documentation
- [ ] **Create v2.0 architecture documentation**
  - Explain adapter pattern implementation
  - Document integration with blade-ui-kit/blade-icons
  - Provide configuration reference
  - Document hybrid registration system
  - Add troubleshooting and FAQ sections

---

## 6. Testing & Quality Assurance

### 6.1 Test Suite Overhaul
- [ ] **Remove existing tests**
  - Delete tests/Unit/LoadAssetsTest.php
  - Delete tests/Feature/LoadIconsTest.php
  - Remove any tests related to deprecated functionality

### 6.2 New Test Implementation
- [ ] **Create configuration tests**
  - Test config file publishing
  - Test configuration validation
  - Test invalid configuration handling

### 6.3 Event-Driven Testing
- [ ] **Test event-driven icon set registration**
  - Test `artisanpack-ui-icons.register-icon-sets` filter hook
  - Test IconSetRegistration class functionality
  - Test event-driven registration with multiple extensions
  - Test conflict resolution between config and event-driven sets

### 6.4 Service Provider Tests
- [ ] **Test CustomIconsServiceProvider**
  - Test service provider registration
  - Test hybrid icon set registration with BladeIcons factory
  - Test configuration merging
  - Test publishing functionality
  - Test eventy integration

### 6.5 Integration Tests
- [ ] **Create end-to-end tests**
  - Test icon registration and usage in Blade components
  - Test multiple icon set registration from both sources
  - Test conflict resolution between icon sets
  - Test error handling for missing paths
  - Test third-party extension integration

### 6.6 TestCase Updates
- [ ] **Update TestCase.php**
  - Remove references to old service provider
  - Add new service provider for testing
  - Update any test utilities

---

## 7. Migration & Deprecation Management

### 7.1 Breaking Changes Documentation
- [ ] **Document all breaking changes**
  - List removed classes and methods
  - Document removed helper functions
  - Explain removed Blade directives
  - List removed asset serving functionality

### 7.2 Upgrade Path Documentation
- [ ] **Create detailed upgrade guide**
  - Step-by-step migration instructions
  - Before/after code examples
  - Common migration scenarios
  - Troubleshooting common issues

### 7.3 Deprecation Strategy
- [ ] **Consider deprecation warnings (optional)**
  - Evaluate if a v1.9.x bridge version is needed
  - Document migration timeline
  - Provide support resources

---

## 8. Release Preparation

### 8.1 Version Management
- [ ] **Update version numbers**
  - Update composer.json to version 2.0.0
  - Update any hardcoded version references
  - Ensure semantic versioning compliance

### 8.2 Changelog Creation
- [ ] **Create comprehensive CHANGELOG.md entry**
  - Document all breaking changes
  - List new features (hybrid registration system)
  - Provide migration guidance
  - Include acknowledgments

### 8.3 Security Review
- [ ] **Review security implications**
  - Audit configuration file handling
  - Review path validation security
  - Ensure no path traversal vulnerabilities
  - Validate icon loading security
  - Review event-driven registration security

### 8.4 Performance Testing
- [ ] **Benchmark new architecture**
  - Compare memory usage with v1.x
  - Test loading performance
  - Validate no performance regressions
  - Test event-driven registration performance

---

## 9. Quality Assurance & Final Validation

### 9.1 Code Quality
- [ ] **Run static analysis tools**
  - Execute PHPStan analysis
  - Run PHP CS Fixer
  - Validate PSR-12 compliance
  - Check for unused imports/methods

### 9.2 Compatibility Testing
- [ ] **Test across Laravel versions**
  - Test minimum Laravel 5.3 support
  - Test with latest Laravel version
  - Validate PHP 8.2+ compatibility
  - Test with different blade-ui-kit versions

### 9.3 Integration Testing
- [ ] **Test with livewire-ui-components**
  - Verify icon integration works correctly
  - Test with Digital Shopfront Button components
  - Validate Blade component rendering
  - Test with multiple icon sets
  - Test event-driven extension integration

### 9.4 Documentation Review
- [ ] **Final documentation validation**
  - Proofread all documentation
  - Validate all code examples work
  - Ensure consistent terminology
  - Check links and references

---

## 10. Additional Considerations

### 10.1 Backward Compatibility Assessment
- [ ] **Document compatibility breaks**
  - List all removed public APIs
  - Identify potential user impact
  - Provide migration tools if needed

### 10.2 Community Communication
- [ ] **Prepare communication strategy**
  - Draft announcement for major version change
  - Prepare GitLab issues for feedback
  - Plan documentation for common questions
  - Consider creating video tutorial

### 10.3 Long-term Maintenance
- [ ] **Plan ongoing maintenance**
  - Define support strategy for v1.x
  - Plan feature roadmap for v2.x
  - Consider community contribution guidelines
  - Plan for blade-ui-kit dependency updates
  - Plan for eventy dependency updates

---

## Implementation Priority

**Phase 1 (Critical):** Tasks 1-3 (Architecture changes, configuration, service provider)
**Phase 2 (Essential):** Tasks 4-5 (Documentation, testing)  
**Phase 3 (Important):** Tasks 6-7 (Migration support, release prep)
**Phase 4 (Polish):** Tasks 8-9 (QA, long-term planning)

---

## Success Metrics

- ✅ Package memory footprint reduced by >95%
- ✅ Installation and setup reduced to <5 steps
- ✅ Zero hardcoded icon data
- ✅ Full integration with blade-ui-kit/blade-icons
- ✅ Comprehensive documentation and examples
- ✅100% test coverage for new functionality
- ✅ Smooth migration path for existing users

---

*This transformation represents a fundamental architectural improvement that positions the package as a valuable extensibility tool rather than a redundant icon provider.*
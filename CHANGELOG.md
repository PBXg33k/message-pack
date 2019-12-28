# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased] - N/A
### Added
- `FileMessage` and descendants
  - Added jav_file_id property
    - This property can be used to download file from JavToolBoxApi_app
- `PersistVideoStatusMessage`
### Changed
- `CheckedVideoMessage`
  - Added `bool` strict property
  - Added `?int` videoLength property
  

## [0.3] - 2019-12-05
### Added
- `VideoCheckedMessage`

## [0.2] - 2019-09-21
### Changed
- Messages accept paths instead of entity ids

## 0.1 - 2019-09-21
### Added
- Core

[Unreleased]: https://github.com/PBXg33k/message-pack/compare/v0.3...HEAD
[0.3]: https://github.com/PBXg33k/message-pack/compare/v0.2...v0.3
[0.2]: https://github.com/PBXg33k/message-pack/compare/v0.1...v0.2

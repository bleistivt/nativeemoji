# Native Emoji

https://vanillaforums.org/addon/nativeemoji-plugin

This plugin adds a copy of the standard "Apple" emoji set with aliases for system emoji.
This way, smartphone users can use the native emoji keyboard to enter emoji which will get translated to Vanilla emoji.

## Usage

This plugin adds an emoji set.
To use it, enable the **Emoji Sets** (EmojiExtender) plugin and activate the "Apple Emoji + Native Aliases" set.

Unfortunately, Vanilla doesn't support UTF-8 emoji out of the box.
To enable native emoji support you need to add the following lines to your `conf/config.php` and visit _yourforum.com_/utility/structure

```php
$Configuration['Database']['CharacterEncoding'] = 'utf8mb4';
$Configuration['Database']['ExtendedProperties']['Collate'] = 'utf8mb4_unicode_ci';
$Configuration['Database']['ConnectionOptions'][1002] = "set names 'utf8mb4'; set time_zone = '+0:0';";
```

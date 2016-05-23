<?php

$PluginInfo['nativeemoji'] = [
    'Name' => 'Native Emoji',
    'Description' => 'Aliases for native emoji. Converts 😉 to :wink:.',
    'Version' => '0.1',
    'MobileFriendly' => true,
    'Author' => 'Bleistivt',
    'AuthorUrl' => 'http://bleistivt.net',
    'License' => 'GNU GPL2'
];

class NativeEmojiPlugin extends Gdn_Plugin {

    public function emojiExtenderPlugin_init_handler($sender) {
        $aliases = array_merge(Emoji::instance()->getAliases(), [
            // Native/system emoji translations, see http://emoji.codes/family
            '😄' => 'smile',
            '😃' => 'smiley',
            '😉' => 'wink',
            '😊' => 'blush',
            '😐' => 'neutral',
            '☺' => 'relaxed',
            '😁' => 'grin',
            '😂' => 'joy',
            '😅' => 'sweat_smile',
            '😆' => 'lol',
            '😇' => 'innocent',
            '😈' => 'naughty',
            '😋' => 'yum',
            '😌' => 'relieved',
            '😍' => 'love',
            '😎' => 'sunglasses',
            '😏' => 'smirk',
            '😑' => 'expressionless',
            '😒' => 'unamused',
            '😓' => 'sweat',
            '😔' => 'pensive',
            '😕' => 'confused',
            '😖' => 'confounded',
            '😗' => 'kissing',
            '😘' => 'kissing_heart',
            '😙' => 'kissing_smiling_eyes',
            '😚' => 'kissing_closed_eyes',
            '😛' => 'tongue',
            '😞' => 'disappointed',
            '😟' => 'worried',
            '😠' => 'angry',
            '😡' => 'rage',
            '😢' => 'cry',
            '😣' => 'persevere',
            '😤' => 'triumph',
            '😦' => 'frowning',
            '😧' => 'anguished',
            '😨' => 'fearful',
            '😩' => 'weary',
            '😪' => 'sleepy',
            '😫' => 'tired_face',
            '😬' => 'grimace',
            '😭' => 'bawling',
            '😮' => 'open_mouth',
            '😯' => 'hushed',
            '😰' => 'cold_sweat',
            '😱' => 'scream',
            '😲' => 'astonished',
            '😳' => 'flushed',
            '😴' => 'sleeping',
            '😵' => 'dizzy',
            '😶' => 'no_mouth',
            '😷' => 'mask',
            '⭐' => 'star',
            '🍪' => 'cookie',
            '⚠' => 'warning',
            '❤️' => 'heart',
            '💔' => 'heartbreak',
            '👍' => '+1',
            '👎' => '-1'
        ]);

        $sender->addEmojiSet('nativeemoji', [
            'name' => 'Apple Emoji + Native Aliases',
            'author' => 'Apple Inc.',
            'description' => 'Similar to the "Apple Emoji" set but with aliases for native emoji.',
            'format' => '<img class="emoji" src="%1$s" title="%2$s" alt="%2$s" height="20" />',
            'icon' => '../../plugins/nativeemoji/icon.png',
            'aliases' => $aliases
        ], '/resources/emoji');
    }

}

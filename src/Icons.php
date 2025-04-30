<?php

namespace Digitalshopfront\Icons;

use TorMorten\Eventy\Facades\Eventy;

class Icons
{

    public function getIcons( $args = [] ): array
    {
        $icons = $this->iconsList();

        if ( !empty( $args ) ) {
            foreach ( $args as $key => $arg ) {
                $icons = array_filter( $icons, function ( $icon ) use ( $arg, $key ) {
                    return $icon[ $key ] === $arg || in_array( $arg, $icon[ $key ] );
                } );
            }
        }

        return $icons;
    }

    public function iconsList(): array
    {
        $icons = [
            [
                'name'     => '0',
                'icon'     => '0',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => '1',
                'icon'     => '1',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => '2',
                'icon'     => '2',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => '3',
                'icon'     => '3',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => '4',
                'icon'     => '4',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => '5',
                'icon'     => '5',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => '6',
                'icon'     => '6',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => '7',
                'icon'     => '7',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => '8',
                'icon'     => '8',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => '9',
                'icon'     => '9',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'A',
                'icon'     => 'a',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Address Book',
                'icon'     => 'address-book',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Address Card',
                'icon'     => 'address-card',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Align Center',
                'icon'     => 'align-center',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Align Justify',
                'icon'     => 'align-justify',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Align Left',
                'icon'     => 'align-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Align Right',
                'icon'     => 'align-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Anchor Circle Check',
                'icon'     => 'anchor-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Anchor Circle Exclamation',
                'icon'     => 'anchor-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Anchor Circle Xmark',
                'icon'     => 'anchor-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Anchor Lock',
                'icon'     => 'anchor-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Anchor',
                'icon'     => 'anchor',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Angle Down',
                'icon'     => 'angle-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Angle Left',
                'icon'     => 'angle-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Angle Right',
                'icon'     => 'angle-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Angle Up',
                'icon'     => 'angle-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Angles Down',
                'icon'     => 'angles-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Angles Left',
                'icon'     => 'angles-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Angles Right',
                'icon'     => 'angles-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Angles Up',
                'icon'     => 'angles-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ankh',
                'icon'     => 'ankh',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Apple Whole',
                'icon'     => 'apple-whole',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Archway',
                'icon'     => 'archway',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Down 1 9',
                'icon'     => 'arrow-down-1-9',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Down 9 1',
                'icon'     => 'arrow-down-9-1',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Down A Z',
                'icon'     => 'arrow-down-a-z',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Down Long',
                'icon'     => 'arrow-down-long',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Down Short Wide',
                'icon'     => 'arrow-down-short-wide',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Down Up Across Line',
                'icon'     => 'arrow-down-up-across-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Down Up Lock',
                'icon'     => 'arrow-down-up-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Down Wide Short',
                'icon'     => 'arrow-down-wide-short',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Down Z A',
                'icon'     => 'arrow-down-z-a',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Down',
                'icon'     => 'arrow-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Left Long',
                'icon'     => 'arrow-left-long',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Left',
                'icon'     => 'arrow-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Pointer',
                'icon'     => 'arrow-pointer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Right Arrow Left',
                'icon'     => 'arrow-right-arrow-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Right From Bracket',
                'icon'     => 'arrow-right-from-bracket',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Right Long',
                'icon'     => 'arrow-right-long',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Right To Bracket',
                'icon'     => 'arrow-right-to-bracket',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Right To City',
                'icon'     => 'arrow-right-to-city',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Right',
                'icon'     => 'arrow-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Rotate Left',
                'icon'     => 'arrow-rotate-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Rotate Right',
                'icon'     => 'arrow-rotate-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Trend Down',
                'icon'     => 'arrow-trend-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Trend Up',
                'icon'     => 'arrow-trend-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Turn Down',
                'icon'     => 'arrow-turn-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Turn Up',
                'icon'     => 'arrow-turn-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up 1 9',
                'icon'     => 'arrow-up-1-9',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up 9 1',
                'icon'     => 'arrow-up-9-1',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up A Z',
                'icon'     => 'arrow-up-a-z',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up From Bracket',
                'icon'     => 'arrow-up-from-bracket',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up From Ground Water',
                'icon'     => 'arrow-up-from-ground-water',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up From Water Pump',
                'icon'     => 'arrow-up-from-water-pump',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up Long',
                'icon'     => 'arrow-up-long',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up Right Dots',
                'icon'     => 'arrow-up-right-dots',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up Right From Square',
                'icon'     => 'arrow-up-right-from-square',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up Short Wide',
                'icon'     => 'arrow-up-short-wide',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up Wide Short',
                'icon'     => 'arrow-up-wide-short',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up Z A',
                'icon'     => 'arrow-up-z-a',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrow Up',
                'icon'     => 'arrow-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Down To Line',
                'icon'     => 'arrows-down-to-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Down To People',
                'icon'     => 'arrows-down-to-people',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Left Right To Line',
                'icon'     => 'arrows-left-right-to-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Left Right',
                'icon'     => 'arrows-left-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Rotate',
                'icon'     => 'arrows-rotate',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Spin',
                'icon'     => 'arrows-spin',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Split Up And Left',
                'icon'     => 'arrows-split-up-and-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows To Circle',
                'icon'     => 'arrows-to-circle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows To Dot',
                'icon'     => 'arrows-to-dot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows To Eye',
                'icon'     => 'arrows-to-eye',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Turn Right',
                'icon'     => 'arrows-turn-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Turn To Dots',
                'icon'     => 'arrows-turn-to-dots',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Up Down Left Right',
                'icon'     => 'arrows-up-down-left-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Up Down',
                'icon'     => 'arrows-up-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Arrows Up To Line',
                'icon'     => 'arrows-up-to-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Asterisk',
                'icon'     => 'asterisk',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'At',
                'icon'     => 'at',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Atom',
                'icon'     => 'atom',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Audio Description',
                'icon'     => 'audio-description',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Austral Sign',
                'icon'     => 'austral-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Award',
                'icon'     => 'award',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'B',
                'icon'     => 'b',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Baby Carriage',
                'icon'     => 'baby-carriage',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Baby',
                'icon'     => 'baby',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Backward Fast',
                'icon'     => 'backward-fast',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Backward Step',
                'icon'     => 'backward-step',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Backward',
                'icon'     => 'backward',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bacon',
                'icon'     => 'bacon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bacteria',
                'icon'     => 'bacteria',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bacterium',
                'icon'     => 'bacterium',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bag Shopping',
                'icon'     => 'bag-shopping',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bahai',
                'icon'     => 'bahai',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Baht Sign',
                'icon'     => 'baht-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ban Smoking',
                'icon'     => 'ban-smoking',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ban',
                'icon'     => 'ban',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bandage',
                'icon'     => 'bandage',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bangladeshi Taka Sign',
                'icon'     => 'bangladeshi-taka-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Barcode',
                'icon'     => 'barcode',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bars Progress',
                'icon'     => 'bars-progress',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bars Staggered',
                'icon'     => 'bars-staggered',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bars',
                'icon'     => 'bars',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Baseball Bat Ball',
                'icon'     => 'baseball-bat-ball',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Baseball',
                'icon'     => 'baseball',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Basket Shopping',
                'icon'     => 'basket-shopping',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Basketball',
                'icon'     => 'basketball',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bath',
                'icon'     => 'bath',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Battery Empty',
                'icon'     => 'battery-empty',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Battery Full',
                'icon'     => 'battery-full',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Battery Half',
                'icon'     => 'battery-half',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Battery Quarter',
                'icon'     => 'battery-quarter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Battery Three Quarters',
                'icon'     => 'battery-three-quarters',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bed Pulse',
                'icon'     => 'bed-pulse',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bed',
                'icon'     => 'bed',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Beer Mug Empty',
                'icon'     => 'beer-mug-empty',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bell Concierge',
                'icon'     => 'bell-concierge',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bell Slash',
                'icon'     => 'bell-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Bell',
                'icon'     => 'bell',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Bezier Curve',
                'icon'     => 'bezier-curve',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bicycle',
                'icon'     => 'bicycle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Binoculars',
                'icon'     => 'binoculars',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Biohazard',
                'icon'     => 'biohazard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bitcoin Sign',
                'icon'     => 'bitcoin-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Blender Phone',
                'icon'     => 'blender-phone',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Blender',
                'icon'     => 'blender',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Blog',
                'icon'     => 'blog',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bold',
                'icon'     => 'bold',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bolt Lightning',
                'icon'     => 'bolt-lightning',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bolt',
                'icon'     => 'bolt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bomb',
                'icon'     => 'bomb',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bone',
                'icon'     => 'bone',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bong',
                'icon'     => 'bong',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book Atlas',
                'icon'     => 'book-atlas',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book Bible',
                'icon'     => 'book-bible',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book Bookmark',
                'icon'     => 'book-bookmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book Journal Whills',
                'icon'     => 'book-journal-whills',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book Medical',
                'icon'     => 'book-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book Open Reader',
                'icon'     => 'book-open-reader',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book Open',
                'icon'     => 'book-open',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book Quran',
                'icon'     => 'book-quran',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book Skull',
                'icon'     => 'book-skull',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book Tanakh',
                'icon'     => 'book-tanakh',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Book',
                'icon'     => 'book',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bookmark',
                'icon'     => 'bookmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Border All',
                'icon'     => 'border-all',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Border None',
                'icon'     => 'border-none',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Border Top Left',
                'icon'     => 'border-top-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bore Hole',
                'icon'     => 'bore-hole',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bottle Droplet',
                'icon'     => 'bottle-droplet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bottle Water',
                'icon'     => 'bottle-water',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bowl Food',
                'icon'     => 'bowl-food',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bowl Rice',
                'icon'     => 'bowl-rice',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bowling Ball',
                'icon'     => 'bowling-ball',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Box Archive',
                'icon'     => 'box-archive',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Box Open',
                'icon'     => 'box-open',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Box Tissue',
                'icon'     => 'box-tissue',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Box',
                'icon'     => 'box',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Boxes Packing',
                'icon'     => 'boxes-packing',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Boxes Stacked',
                'icon'     => 'boxes-stacked',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Braille',
                'icon'     => 'braille',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Brain',
                'icon'     => 'brain',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Brazilian Real Sign',
                'icon'     => 'brazilian-real-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bread Slice',
                'icon'     => 'bread-slice',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bridge Circle Check',
                'icon'     => 'bridge-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bridge Circle Exclamation',
                'icon'     => 'bridge-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bridge Circle Xmark',
                'icon'     => 'bridge-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bridge Lock',
                'icon'     => 'bridge-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bridge Water',
                'icon'     => 'bridge-water',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bridge',
                'icon'     => 'bridge',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Briefcase Medical',
                'icon'     => 'briefcase-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Briefcase',
                'icon'     => 'briefcase',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Broom Ball',
                'icon'     => 'broom-ball',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Broom',
                'icon'     => 'broom',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Brush',
                'icon'     => 'brush',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bucket',
                'icon'     => 'bucket',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bug Slash',
                'icon'     => 'bug-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bug',
                'icon'     => 'bug',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bugs',
                'icon'     => 'bugs',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Circle Arrow Right',
                'icon'     => 'building-circle-arrow-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Circle Check',
                'icon'     => 'building-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Circle Exclamation',
                'icon'     => 'building-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Circle Xmark',
                'icon'     => 'building-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Columns',
                'icon'     => 'building-columns',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Flag',
                'icon'     => 'building-flag',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Lock',
                'icon'     => 'building-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Ngo',
                'icon'     => 'building-ngo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Shield',
                'icon'     => 'building-shield',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Un',
                'icon'     => 'building-un',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building User',
                'icon'     => 'building-user',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building Wheat',
                'icon'     => 'building-wheat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Building',
                'icon'     => 'building',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Bullhorn',
                'icon'     => 'bullhorn',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bullseye',
                'icon'     => 'bullseye',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Burger',
                'icon'     => 'burger',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Burst',
                'icon'     => 'burst',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bus Simple',
                'icon'     => 'bus-simple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Bus',
                'icon'     => 'bus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Business Time',
                'icon'     => 'business-time',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'C',
                'icon'     => 'c',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cable Car',
                'icon'     => 'cable-car',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cake Candles',
                'icon'     => 'cake-candles',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Calculator',
                'icon'     => 'calculator',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Calendar Check',
                'icon'     => 'calendar-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Calendar Day',
                'icon'     => 'calendar-day',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Calendar Days',
                'icon'     => 'calendar-days',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Calendar Minus',
                'icon'     => 'calendar-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Calendar Plus',
                'icon'     => 'calendar-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Calendar Week',
                'icon'     => 'calendar-week',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Calendar Xmark',
                'icon'     => 'calendar-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Calendar',
                'icon'     => 'calendar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Camera Retro',
                'icon'     => 'camera-retro',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Camera Rotate',
                'icon'     => 'camera-rotate',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Camera',
                'icon'     => 'camera',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Campground',
                'icon'     => 'campground',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Candy Cane',
                'icon'     => 'candy-cane',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cannabis',
                'icon'     => 'cannabis',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Capsules',
                'icon'     => 'capsules',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Car Battery',
                'icon'     => 'car-battery',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Car Burst',
                'icon'     => 'car-burst',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Car On',
                'icon'     => 'car-on',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Car Rear',
                'icon'     => 'car-rear',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Car Side',
                'icon'     => 'car-side',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Car Tunnel',
                'icon'     => 'car-tunnel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Car',
                'icon'     => 'car',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Caravan',
                'icon'     => 'caravan',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Caret Down',
                'icon'     => 'caret-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Caret Left',
                'icon'     => 'caret-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Caret Right',
                'icon'     => 'caret-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Caret Up',
                'icon'     => 'caret-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Carrot',
                'icon'     => 'carrot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cart Arrow Down',
                'icon'     => 'cart-arrow-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cart Flatbed Suitcase',
                'icon'     => 'cart-flatbed-suitcase',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cart Flatbed',
                'icon'     => 'cart-flatbed',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cart Plus',
                'icon'     => 'cart-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cart Shopping',
                'icon'     => 'cart-shopping',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cash Register',
                'icon'     => 'cash-register',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cat',
                'icon'     => 'cat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cedi Sign',
                'icon'     => 'cedi-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cent Sign',
                'icon'     => 'cent-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Certificate',
                'icon'     => 'certificate',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chair',
                'icon'     => 'chair',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chalkboard User',
                'icon'     => 'chalkboard-user',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chalkboard',
                'icon'     => 'chalkboard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Champagne Glasses',
                'icon'     => 'champagne-glasses',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Charging Station',
                'icon'     => 'charging-station',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chart Area',
                'icon'     => 'chart-area',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chart Bar',
                'icon'     => 'chart-bar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Chart Column',
                'icon'     => 'chart-column',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chart Diagram',
                'icon'     => 'chart-diagram',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chart Gantt',
                'icon'     => 'chart-gantt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chart Line',
                'icon'     => 'chart-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chart Pie',
                'icon'     => 'chart-pie',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chart Simple',
                'icon'     => 'chart-simple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Check Double',
                'icon'     => 'check-double',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Check To Slot',
                'icon'     => 'check-to-slot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Check',
                'icon'     => 'check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cheese',
                'icon'     => 'cheese',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chess Bishop',
                'icon'     => 'chess-bishop',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Chess Board',
                'icon'     => 'chess-board',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chess King',
                'icon'     => 'chess-king',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Chess Knight',
                'icon'     => 'chess-knight',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Chess Pawn',
                'icon'     => 'chess-pawn',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Chess Queen',
                'icon'     => 'chess-queen',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Chess Rook',
                'icon'     => 'chess-rook',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Chess',
                'icon'     => 'chess',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chevron Down',
                'icon'     => 'chevron-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chevron Left',
                'icon'     => 'chevron-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chevron Right',
                'icon'     => 'chevron-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Chevron Up',
                'icon'     => 'chevron-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Child Combatant',
                'icon'     => 'child-combatant',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Child Dress',
                'icon'     => 'child-dress',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Child Reaching',
                'icon'     => 'child-reaching',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Child',
                'icon'     => 'child',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Children',
                'icon'     => 'children',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Church',
                'icon'     => 'church',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Arrow Down',
                'icon'     => 'circle-arrow-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Arrow Left',
                'icon'     => 'circle-arrow-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Arrow Right',
                'icon'     => 'circle-arrow-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Arrow Up',
                'icon'     => 'circle-arrow-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Check',
                'icon'     => 'circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle Chevron Down',
                'icon'     => 'circle-chevron-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Chevron Left',
                'icon'     => 'circle-chevron-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Chevron Right',
                'icon'     => 'circle-chevron-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Chevron Up',
                'icon'     => 'circle-chevron-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Dollar To Slot',
                'icon'     => 'circle-dollar-to-slot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Dot',
                'icon'     => 'circle-dot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle Down',
                'icon'     => 'circle-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle Exclamation',
                'icon'     => 'circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle H',
                'icon'     => 'circle-h',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Half Stroke',
                'icon'     => 'circle-half-stroke',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Info',
                'icon'     => 'circle-info',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Left',
                'icon'     => 'circle-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle Minus',
                'icon'     => 'circle-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Nodes',
                'icon'     => 'circle-nodes',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Notch',
                'icon'     => 'circle-notch',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Pause',
                'icon'     => 'circle-pause',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle Play',
                'icon'     => 'circle-play',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle Plus',
                'icon'     => 'circle-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Question',
                'icon'     => 'circle-question',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle Radiation',
                'icon'     => 'circle-radiation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Circle Right',
                'icon'     => 'circle-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle Stop',
                'icon'     => 'circle-stop',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle Up',
                'icon'     => 'circle-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle User',
                'icon'     => 'circle-user',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle Xmark',
                'icon'     => 'circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Circle',
                'icon'     => 'circle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'City',
                'icon'     => 'city',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Clapperboard',
                'icon'     => 'clapperboard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Clipboard Check',
                'icon'     => 'clipboard-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Clipboard List',
                'icon'     => 'clipboard-list',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Clipboard Question',
                'icon'     => 'clipboard-question',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Clipboard User',
                'icon'     => 'clipboard-user',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Clipboard',
                'icon'     => 'clipboard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Clock Rotate Left',
                'icon'     => 'clock-rotate-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Clock',
                'icon'     => 'clock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Clone',
                'icon'     => 'clone',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Closed Captioning',
                'icon'     => 'closed-captioning',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Cloud Arrow Down',
                'icon'     => 'cloud-arrow-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud Arrow Up',
                'icon'     => 'cloud-arrow-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud Bolt',
                'icon'     => 'cloud-bolt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud Meatball',
                'icon'     => 'cloud-meatball',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud Moon Rain',
                'icon'     => 'cloud-moon-rain',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud Moon',
                'icon'     => 'cloud-moon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud Rain',
                'icon'     => 'cloud-rain',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud Showers Heavy',
                'icon'     => 'cloud-showers-heavy',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud Showers Water',
                'icon'     => 'cloud-showers-water',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud Sun Rain',
                'icon'     => 'cloud-sun-rain',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud Sun',
                'icon'     => 'cloud-sun',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cloud',
                'icon'     => 'cloud',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Clover',
                'icon'     => 'clover',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Code Branch',
                'icon'     => 'code-branch',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Code Commit',
                'icon'     => 'code-commit',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Code Compare',
                'icon'     => 'code-compare',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Code Fork',
                'icon'     => 'code-fork',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Code Merge',
                'icon'     => 'code-merge',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Code Pull Request',
                'icon'     => 'code-pull-request',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Code',
                'icon'     => 'code',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Coins',
                'icon'     => 'coins',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Colon Sign',
                'icon'     => 'colon-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Comment Dollar',
                'icon'     => 'comment-dollar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Comment Dots',
                'icon'     => 'comment-dots',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Comment Medical',
                'icon'     => 'comment-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Comment Nodes',
                'icon'     => 'comment-nodes',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Comment Slash',
                'icon'     => 'comment-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Comment Sms',
                'icon'     => 'comment-sms',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Comment',
                'icon'     => 'comment',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Comments Dollar',
                'icon'     => 'comments-dollar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Comments',
                'icon'     => 'comments',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Compact Disc',
                'icon'     => 'compact-disc',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Compass Drafting',
                'icon'     => 'compass-drafting',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Compass',
                'icon'     => 'compass',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Compress',
                'icon'     => 'compress',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Computer Mouse',
                'icon'     => 'computer-mouse',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Computer',
                'icon'     => 'computer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cookie Bite',
                'icon'     => 'cookie-bite',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cookie',
                'icon'     => 'cookie',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Copy',
                'icon'     => 'copy',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Copyright',
                'icon'     => 'copyright',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Couch',
                'icon'     => 'couch',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cow',
                'icon'     => 'cow',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Credit Card',
                'icon'     => 'credit-card',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Crop Simple',
                'icon'     => 'crop-simple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Crop',
                'icon'     => 'crop',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cross',
                'icon'     => 'cross',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Crosshairs',
                'icon'     => 'crosshairs',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Crow',
                'icon'     => 'crow',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Crown',
                'icon'     => 'crown',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Crutch',
                'icon'     => 'crutch',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cruzeiro Sign',
                'icon'     => 'cruzeiro-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cube',
                'icon'     => 'cube',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cubes Stacked',
                'icon'     => 'cubes-stacked',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Cubes',
                'icon'     => 'cubes',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'D',
                'icon'     => 'd',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Database',
                'icon'     => 'database',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Delete Left',
                'icon'     => 'delete-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Democrat',
                'icon'     => 'democrat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Desktop',
                'icon'     => 'desktop',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dharmachakra',
                'icon'     => 'dharmachakra',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Diagram Next',
                'icon'     => 'diagram-next',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Diagram Predecessor',
                'icon'     => 'diagram-predecessor',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Diagram Project',
                'icon'     => 'diagram-project',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Diagram Successor',
                'icon'     => 'diagram-successor',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Diamond Turn Right',
                'icon'     => 'diamond-turn-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Diamond',
                'icon'     => 'diamond',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dice D20',
                'icon'     => 'dice-d20',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dice D6',
                'icon'     => 'dice-d6',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dice Five',
                'icon'     => 'dice-five',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dice Four',
                'icon'     => 'dice-four',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dice One',
                'icon'     => 'dice-one',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dice Six',
                'icon'     => 'dice-six',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dice Three',
                'icon'     => 'dice-three',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dice Two',
                'icon'     => 'dice-two',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dice',
                'icon'     => 'dice',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Disease',
                'icon'     => 'disease',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Display',
                'icon'     => 'display',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Divide',
                'icon'     => 'divide',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dna',
                'icon'     => 'dna',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dog',
                'icon'     => 'dog',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dollar Sign',
                'icon'     => 'dollar-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dolly',
                'icon'     => 'dolly',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dong Sign',
                'icon'     => 'dong-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Door Closed',
                'icon'     => 'door-closed',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Door Open',
                'icon'     => 'door-open',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dove',
                'icon'     => 'dove',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Down Left And Up Right To Center',
                'icon'     => 'down-left-and-up-right-to-center',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Down Long',
                'icon'     => 'down-long',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Download',
                'icon'     => 'download',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dragon',
                'icon'     => 'dragon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Draw Polygon',
                'icon'     => 'draw-polygon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Droplet Slash',
                'icon'     => 'droplet-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Droplet',
                'icon'     => 'droplet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Drum Steelpan',
                'icon'     => 'drum-steelpan',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Drum',
                'icon'     => 'drum',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Drumstick Bite',
                'icon'     => 'drumstick-bite',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dumbbell',
                'icon'     => 'dumbbell',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dumpster Fire',
                'icon'     => 'dumpster-fire',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dumpster',
                'icon'     => 'dumpster',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Dungeon',
                'icon'     => 'dungeon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'E',
                'icon'     => 'e',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ear Deaf',
                'icon'     => 'ear-deaf',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ear Listen',
                'icon'     => 'ear-listen',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Earth Africa',
                'icon'     => 'earth-africa',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Earth Americas',
                'icon'     => 'earth-americas',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Earth Asia',
                'icon'     => 'earth-asia',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Earth Europe',
                'icon'     => 'earth-europe',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Earth Oceania',
                'icon'     => 'earth-oceania',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Egg',
                'icon'     => 'egg',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Eject',
                'icon'     => 'eject',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Elevator',
                'icon'     => 'elevator',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ellipsis Vertical',
                'icon'     => 'ellipsis-vertical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ellipsis',
                'icon'     => 'ellipsis',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Envelope Circle Check',
                'icon'     => 'envelope-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Envelope Open Text',
                'icon'     => 'envelope-open-text',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Envelope Open',
                'icon'     => 'envelope-open',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Envelope',
                'icon'     => 'envelope',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Envelopes Bulk',
                'icon'     => 'envelopes-bulk',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Equals',
                'icon'     => 'equals',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Eraser',
                'icon'     => 'eraser',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ethernet',
                'icon'     => 'ethernet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Euro Sign',
                'icon'     => 'euro-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Exclamation',
                'icon'     => 'exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Expand',
                'icon'     => 'expand',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Explosion',
                'icon'     => 'explosion',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Eye Dropper',
                'icon'     => 'eye-dropper',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Eye Low Vision',
                'icon'     => 'eye-low-vision',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Eye Slash',
                'icon'     => 'eye-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Eye',
                'icon'     => 'eye',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'F',
                'icon'     => 'f',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Face Angry',
                'icon'     => 'face-angry',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Dizzy',
                'icon'     => 'face-dizzy',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Flushed',
                'icon'     => 'face-flushed',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Frown Open',
                'icon'     => 'face-frown-open',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Frown',
                'icon'     => 'face-frown',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grimace',
                'icon'     => 'face-grimace',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Beam Sweat',
                'icon'     => 'face-grin-beam-sweat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Beam',
                'icon'     => 'face-grin-beam',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Hearts',
                'icon'     => 'face-grin-hearts',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Squint Tears',
                'icon'     => 'face-grin-squint-tears',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Squint',
                'icon'     => 'face-grin-squint',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Stars',
                'icon'     => 'face-grin-stars',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Tears',
                'icon'     => 'face-grin-tears',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Tongue Squint',
                'icon'     => 'face-grin-tongue-squint',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Tongue Wink',
                'icon'     => 'face-grin-tongue-wink',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Tongue',
                'icon'     => 'face-grin-tongue',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Wide',
                'icon'     => 'face-grin-wide',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin Wink',
                'icon'     => 'face-grin-wink',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Grin',
                'icon'     => 'face-grin',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Kiss Beam',
                'icon'     => 'face-kiss-beam',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Kiss Wink Heart',
                'icon'     => 'face-kiss-wink-heart',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Kiss',
                'icon'     => 'face-kiss',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Laugh Beam',
                'icon'     => 'face-laugh-beam',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Laugh Squint',
                'icon'     => 'face-laugh-squint',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Laugh Wink',
                'icon'     => 'face-laugh-wink',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Laugh',
                'icon'     => 'face-laugh',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Meh Blank',
                'icon'     => 'face-meh-blank',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Meh',
                'icon'     => 'face-meh',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Rolling Eyes',
                'icon'     => 'face-rolling-eyes',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Sad Cry',
                'icon'     => 'face-sad-cry',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Sad Tear',
                'icon'     => 'face-sad-tear',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Smile Beam',
                'icon'     => 'face-smile-beam',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Smile Wink',
                'icon'     => 'face-smile-wink',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Smile',
                'icon'     => 'face-smile',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Surprise',
                'icon'     => 'face-surprise',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Face Tired',
                'icon'     => 'face-tired',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Fan',
                'icon'     => 'fan',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Faucet Drip',
                'icon'     => 'faucet-drip',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Faucet',
                'icon'     => 'faucet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Fax',
                'icon'     => 'fax',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Feather Pointed',
                'icon'     => 'feather-pointed',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Feather',
                'icon'     => 'feather',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ferry',
                'icon'     => 'ferry',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Arrow Down',
                'icon'     => 'file-arrow-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Arrow Up',
                'icon'     => 'file-arrow-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Audio',
                'icon'     => 'file-audio',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'File Circle Check',
                'icon'     => 'file-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Circle Exclamation',
                'icon'     => 'file-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Circle Minus',
                'icon'     => 'file-circle-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Circle Plus',
                'icon'     => 'file-circle-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Circle Question',
                'icon'     => 'file-circle-question',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Circle Xmark',
                'icon'     => 'file-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Code',
                'icon'     => 'file-code',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'File Contract',
                'icon'     => 'file-contract',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Csv',
                'icon'     => 'file-csv',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Excel',
                'icon'     => 'file-excel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'File Export',
                'icon'     => 'file-export',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Fragment',
                'icon'     => 'file-fragment',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Half Dashed',
                'icon'     => 'file-half-dashed',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Image',
                'icon'     => 'file-image',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'File Import',
                'icon'     => 'file-import',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Invoice Dollar',
                'icon'     => 'file-invoice-dollar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Invoice',
                'icon'     => 'file-invoice',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Lines',
                'icon'     => 'file-lines',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'File Medical',
                'icon'     => 'file-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Pdf',
                'icon'     => 'file-pdf',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'File Pen',
                'icon'     => 'file-pen',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Powerpoint',
                'icon'     => 'file-powerpoint',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'File Prescription',
                'icon'     => 'file-prescription',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Shield',
                'icon'     => 'file-shield',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Signature',
                'icon'     => 'file-signature',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Video',
                'icon'     => 'file-video',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'File Waveform',
                'icon'     => 'file-waveform',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'File Word',
                'icon'     => 'file-word',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'File Zipper',
                'icon'     => 'file-zipper',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'File',
                'icon'     => 'file',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Fill Drip',
                'icon'     => 'fill-drip',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Fill',
                'icon'     => 'fill',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Film',
                'icon'     => 'film',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Filter Circle Dollar',
                'icon'     => 'filter-circle-dollar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Filter Circle Xmark',
                'icon'     => 'filter-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Filter',
                'icon'     => 'filter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Fingerprint',
                'icon'     => 'fingerprint',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Fire Burner',
                'icon'     => 'fire-burner',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Fire Extinguisher',
                'icon'     => 'fire-extinguisher',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Fire Flame Curved',
                'icon'     => 'fire-flame-curved',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Fire Flame Simple',
                'icon'     => 'fire-flame-simple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Fire',
                'icon'     => 'fire',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Fish Fins',
                'icon'     => 'fish-fins',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Fish',
                'icon'     => 'fish',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Flag Checkered',
                'icon'     => 'flag-checkered',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Flag Usa',
                'icon'     => 'flag-usa',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Flag',
                'icon'     => 'flag',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Flask Vial',
                'icon'     => 'flask-vial',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Flask',
                'icon'     => 'flask',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Floppy Disk',
                'icon'     => 'floppy-disk',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Florin Sign',
                'icon'     => 'florin-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Folder Closed',
                'icon'     => 'folder-closed',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Folder Minus',
                'icon'     => 'folder-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Folder Open',
                'icon'     => 'folder-open',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Folder Plus',
                'icon'     => 'folder-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Folder Tree',
                'icon'     => 'folder-tree',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Folder',
                'icon'     => 'folder',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Font Awesome',
                'icon'     => 'font-awesome',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                        'brands',
                    ],
            ],
            [
                'name'     => 'Font',
                'icon'     => 'font',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Football',
                'icon'     => 'football',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Forward Fast',
                'icon'     => 'forward-fast',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Forward Step',
                'icon'     => 'forward-step',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Forward',
                'icon'     => 'forward',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Franc Sign',
                'icon'     => 'franc-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Frog',
                'icon'     => 'frog',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Futbol',
                'icon'     => 'futbol',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'G',
                'icon'     => 'g',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gamepad',
                'icon'     => 'gamepad',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gas Pump',
                'icon'     => 'gas-pump',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gauge High',
                'icon'     => 'gauge-high',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gauge Simple High',
                'icon'     => 'gauge-simple-high',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gauge Simple',
                'icon'     => 'gauge-simple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gauge',
                'icon'     => 'gauge',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gavel',
                'icon'     => 'gavel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gear',
                'icon'     => 'gear',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gears',
                'icon'     => 'gears',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gem',
                'icon'     => 'gem',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Genderless',
                'icon'     => 'genderless',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ghost',
                'icon'     => 'ghost',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gift',
                'icon'     => 'gift',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gifts',
                'icon'     => 'gifts',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Glass Water Droplet',
                'icon'     => 'glass-water-droplet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Glass Water',
                'icon'     => 'glass-water',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Glasses',
                'icon'     => 'glasses',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Globe',
                'icon'     => 'globe',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Golf Ball Tee',
                'icon'     => 'golf-ball-tee',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gopuram',
                'icon'     => 'gopuram',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Graduation Cap',
                'icon'     => 'graduation-cap',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Greater Than Equal',
                'icon'     => 'greater-than-equal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Greater Than',
                'icon'     => 'greater-than',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Grip Lines Vertical',
                'icon'     => 'grip-lines-vertical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Grip Lines',
                'icon'     => 'grip-lines',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Grip Vertical',
                'icon'     => 'grip-vertical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Grip',
                'icon'     => 'grip',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Group Arrows Rotate',
                'icon'     => 'group-arrows-rotate',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Guarani Sign',
                'icon'     => 'guarani-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Guitar',
                'icon'     => 'guitar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Gun',
                'icon'     => 'gun',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'H',
                'icon'     => 'h',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hammer',
                'icon'     => 'hammer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hamsa',
                'icon'     => 'hamsa',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Back Fist',
                'icon'     => 'hand-back-fist',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hand Dots',
                'icon'     => 'hand-dots',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Fist',
                'icon'     => 'hand-fist',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Holding Dollar',
                'icon'     => 'hand-holding-dollar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Holding Droplet',
                'icon'     => 'hand-holding-droplet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Holding Hand',
                'icon'     => 'hand-holding-hand',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Holding Heart',
                'icon'     => 'hand-holding-heart',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Holding Medical',
                'icon'     => 'hand-holding-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Holding',
                'icon'     => 'hand-holding',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Lizard',
                'icon'     => 'hand-lizard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hand Middle Finger',
                'icon'     => 'hand-middle-finger',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Peace',
                'icon'     => 'hand-peace',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hand Point Down',
                'icon'     => 'hand-point-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hand Point Left',
                'icon'     => 'hand-point-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hand Point Right',
                'icon'     => 'hand-point-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hand Point Up',
                'icon'     => 'hand-point-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hand Pointer',
                'icon'     => 'hand-pointer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hand Scissors',
                'icon'     => 'hand-scissors',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hand Sparkles',
                'icon'     => 'hand-sparkles',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hand Spock',
                'icon'     => 'hand-spock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hand',
                'icon'     => 'hand',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Handcuffs',
                'icon'     => 'handcuffs',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hands Asl Interpreting',
                'icon'     => 'hands-asl-interpreting',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hands Bound',
                'icon'     => 'hands-bound',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hands Bubbles',
                'icon'     => 'hands-bubbles',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hands Clapping',
                'icon'     => 'hands-clapping',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hands Holding Child',
                'icon'     => 'hands-holding-child',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hands Holding Circle',
                'icon'     => 'hands-holding-circle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hands Holding',
                'icon'     => 'hands-holding',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hands Praying',
                'icon'     => 'hands-praying',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hands',
                'icon'     => 'hands',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Handshake Angle',
                'icon'     => 'handshake-angle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Handshake Simple Slash',
                'icon'     => 'handshake-simple-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Handshake Simple',
                'icon'     => 'handshake-simple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Handshake Slash',
                'icon'     => 'handshake-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Handshake',
                'icon'     => 'handshake',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hanukiah',
                'icon'     => 'hanukiah',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hard Drive',
                'icon'     => 'hard-drive',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hashtag',
                'icon'     => 'hashtag',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hat Cowboy Side',
                'icon'     => 'hat-cowboy-side',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hat Cowboy',
                'icon'     => 'hat-cowboy',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hat Wizard',
                'icon'     => 'hat-wizard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Head Side Cough Slash',
                'icon'     => 'head-side-cough-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Head Side Cough',
                'icon'     => 'head-side-cough',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Head Side Mask',
                'icon'     => 'head-side-mask',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Head Side Virus',
                'icon'     => 'head-side-virus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Heading',
                'icon'     => 'heading',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Headphones Simple',
                'icon'     => 'headphones-simple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Headphones',
                'icon'     => 'headphones',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Headset',
                'icon'     => 'headset',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Heart Circle Bolt',
                'icon'     => 'heart-circle-bolt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Heart Circle Check',
                'icon'     => 'heart-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Heart Circle Exclamation',
                'icon'     => 'heart-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Heart Circle Minus',
                'icon'     => 'heart-circle-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Heart Circle Plus',
                'icon'     => 'heart-circle-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Heart Circle Xmark',
                'icon'     => 'heart-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Heart Crack',
                'icon'     => 'heart-crack',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Heart Pulse',
                'icon'     => 'heart-pulse',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Heart',
                'icon'     => 'heart',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Helicopter Symbol',
                'icon'     => 'helicopter-symbol',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Helicopter',
                'icon'     => 'helicopter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Helmet Safety',
                'icon'     => 'helmet-safety',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Helmet Un',
                'icon'     => 'helmet-un',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hexagon Nodes Bolt',
                'icon'     => 'hexagon-nodes-bolt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hexagon Nodes',
                'icon'     => 'hexagon-nodes',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Highlighter',
                'icon'     => 'highlighter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hill Avalanche',
                'icon'     => 'hill-avalanche',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hill Rockslide',
                'icon'     => 'hill-rockslide',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hippo',
                'icon'     => 'hippo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hockey Puck',
                'icon'     => 'hockey-puck',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Holly Berry',
                'icon'     => 'holly-berry',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Horse Head',
                'icon'     => 'horse-head',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Horse',
                'icon'     => 'horse',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hospital User',
                'icon'     => 'hospital-user',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hospital',
                'icon'     => 'hospital',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hot Tub Person',
                'icon'     => 'hot-tub-person',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hotdog',
                'icon'     => 'hotdog',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hotel',
                'icon'     => 'hotel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hourglass End',
                'icon'     => 'hourglass-end',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hourglass Half',
                'icon'     => 'hourglass-half',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Hourglass Start',
                'icon'     => 'hourglass-start',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hourglass',
                'icon'     => 'hourglass',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'House Chimney Crack',
                'icon'     => 'house-chimney-crack',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Chimney Medical',
                'icon'     => 'house-chimney-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Chimney User',
                'icon'     => 'house-chimney-user',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Chimney Window',
                'icon'     => 'house-chimney-window',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Chimney',
                'icon'     => 'house-chimney',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Circle Check',
                'icon'     => 'house-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Circle Exclamation',
                'icon'     => 'house-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Circle Xmark',
                'icon'     => 'house-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Crack',
                'icon'     => 'house-crack',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Fire',
                'icon'     => 'house-fire',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Flag',
                'icon'     => 'house-flag',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Flood Water Circle Arrow Right',
                'icon'     => 'house-flood-water-circle-arrow-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Flood Water',
                'icon'     => 'house-flood-water',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Laptop',
                'icon'     => 'house-laptop',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Lock',
                'icon'     => 'house-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Medical Circle Check',
                'icon'     => 'house-medical-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Medical Circle Exclamation',
                'icon'     => 'house-medical-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Medical Circle Xmark',
                'icon'     => 'house-medical-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Medical Flag',
                'icon'     => 'house-medical-flag',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Medical',
                'icon'     => 'house-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Signal',
                'icon'     => 'house-signal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House Tsunami',
                'icon'     => 'house-tsunami',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House User',
                'icon'     => 'house-user',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'House',
                'icon'     => 'house',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hryvnia Sign',
                'icon'     => 'hryvnia-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Hurricane',
                'icon'     => 'hurricane',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'I Cursor',
                'icon'     => 'i-cursor',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'I',
                'icon'     => 'i',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ice Cream',
                'icon'     => 'ice-cream',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Icicles',
                'icon'     => 'icicles',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Icons',
                'icon'     => 'icons',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Id Badge',
                'icon'     => 'id-badge',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Id Card Clip',
                'icon'     => 'id-card-clip',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Id Card',
                'icon'     => 'id-card',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Igloo',
                'icon'     => 'igloo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Image Portrait',
                'icon'     => 'image-portrait',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Image',
                'icon'     => 'image',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Images',
                'icon'     => 'images',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Inbox',
                'icon'     => 'inbox',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Indent',
                'icon'     => 'indent',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Indian Rupee Sign',
                'icon'     => 'indian-rupee-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Industry',
                'icon'     => 'industry',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Infinity',
                'icon'     => 'infinity',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Info',
                'icon'     => 'info',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Italic',
                'icon'     => 'italic',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'J',
                'icon'     => 'j',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Jar Wheat',
                'icon'     => 'jar-wheat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Jar',
                'icon'     => 'jar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Jedi',
                'icon'     => 'jedi',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Jet Fighter Up',
                'icon'     => 'jet-fighter-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Jet Fighter',
                'icon'     => 'jet-fighter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Joint',
                'icon'     => 'joint',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Jug Detergent',
                'icon'     => 'jug-detergent',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'K',
                'icon'     => 'k',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Kaaba',
                'icon'     => 'kaaba',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Key',
                'icon'     => 'key',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Keyboard',
                'icon'     => 'keyboard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Khanda',
                'icon'     => 'khanda',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Kip Sign',
                'icon'     => 'kip-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Kit Medical',
                'icon'     => 'kit-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Kitchen Set',
                'icon'     => 'kitchen-set',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Kiwi Bird',
                'icon'     => 'kiwi-bird',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'L',
                'icon'     => 'l',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Land Mine On',
                'icon'     => 'land-mine-on',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Landmark Dome',
                'icon'     => 'landmark-dome',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Landmark Flag',
                'icon'     => 'landmark-flag',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Landmark',
                'icon'     => 'landmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Language',
                'icon'     => 'language',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Laptop Code',
                'icon'     => 'laptop-code',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Laptop File',
                'icon'     => 'laptop-file',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Laptop Medical',
                'icon'     => 'laptop-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Laptop',
                'icon'     => 'laptop',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Lari Sign',
                'icon'     => 'lari-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Layer Group',
                'icon'     => 'layer-group',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Leaf',
                'icon'     => 'leaf',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Left Long',
                'icon'     => 'left-long',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Left Right',
                'icon'     => 'left-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Lemon',
                'icon'     => 'lemon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Less Than Equal',
                'icon'     => 'less-than-equal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Less Than',
                'icon'     => 'less-than',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Life Ring',
                'icon'     => 'life-ring',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Lightbulb',
                'icon'     => 'lightbulb',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Lines Leaning',
                'icon'     => 'lines-leaning',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Link Slash',
                'icon'     => 'link-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Link',
                'icon'     => 'link',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Lira Sign',
                'icon'     => 'lira-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'List Check',
                'icon'     => 'list-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'List Ol',
                'icon'     => 'list-ol',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'List Ul',
                'icon'     => 'list-ul',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'List',
                'icon'     => 'list',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Litecoin Sign',
                'icon'     => 'litecoin-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Location Arrow',
                'icon'     => 'location-arrow',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Location Crosshairs',
                'icon'     => 'location-crosshairs',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Location Dot',
                'icon'     => 'location-dot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Location Pin Lock',
                'icon'     => 'location-pin-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Location Pin',
                'icon'     => 'location-pin',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Lock Open',
                'icon'     => 'lock-open',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Lock',
                'icon'     => 'lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Locust',
                'icon'     => 'locust',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Lungs Virus',
                'icon'     => 'lungs-virus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Lungs',
                'icon'     => 'lungs',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'M',
                'icon'     => 'm',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Magnet',
                'icon'     => 'magnet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Magnifying Glass Arrow Right',
                'icon'     => 'magnifying-glass-arrow-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Magnifying Glass Chart',
                'icon'     => 'magnifying-glass-chart',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Magnifying Glass Dollar',
                'icon'     => 'magnifying-glass-dollar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Magnifying Glass Location',
                'icon'     => 'magnifying-glass-location',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Magnifying Glass Minus',
                'icon'     => 'magnifying-glass-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Magnifying Glass Plus',
                'icon'     => 'magnifying-glass-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Magnifying Glass',
                'icon'     => 'magnifying-glass',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Manat Sign',
                'icon'     => 'manat-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Map Location Dot',
                'icon'     => 'map-location-dot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Map Location',
                'icon'     => 'map-location',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Map Pin',
                'icon'     => 'map-pin',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Map',
                'icon'     => 'map',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Marker',
                'icon'     => 'marker',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mars And Venus Burst',
                'icon'     => 'mars-and-venus-burst',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mars And Venus',
                'icon'     => 'mars-and-venus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mars Double',
                'icon'     => 'mars-double',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mars Stroke Right',
                'icon'     => 'mars-stroke-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mars Stroke Up',
                'icon'     => 'mars-stroke-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mars Stroke',
                'icon'     => 'mars-stroke',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mars',
                'icon'     => 'mars',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Martini Glass Citrus',
                'icon'     => 'martini-glass-citrus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Martini Glass Empty',
                'icon'     => 'martini-glass-empty',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Martini Glass',
                'icon'     => 'martini-glass',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mask Face',
                'icon'     => 'mask-face',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mask Ventilator',
                'icon'     => 'mask-ventilator',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mask',
                'icon'     => 'mask',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Masks Theater',
                'icon'     => 'masks-theater',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mattress Pillow',
                'icon'     => 'mattress-pillow',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Maximize',
                'icon'     => 'maximize',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Medal',
                'icon'     => 'medal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Memory',
                'icon'     => 'memory',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Menorah',
                'icon'     => 'menorah',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mercury',
                'icon'     => 'mercury',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Message',
                'icon'     => 'message',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Meteor',
                'icon'     => 'meteor',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Microchip',
                'icon'     => 'microchip',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Microphone Lines Slash',
                'icon'     => 'microphone-lines-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Microphone Lines',
                'icon'     => 'microphone-lines',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Microphone Slash',
                'icon'     => 'microphone-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Microphone',
                'icon'     => 'microphone',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Microscope',
                'icon'     => 'microscope',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mill Sign',
                'icon'     => 'mill-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Minimize',
                'icon'     => 'minimize',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Minus',
                'icon'     => 'minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mitten',
                'icon'     => 'mitten',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mobile Button',
                'icon'     => 'mobile-button',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mobile Retro',
                'icon'     => 'mobile-retro',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mobile Screen Button',
                'icon'     => 'mobile-screen-button',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mobile Screen',
                'icon'     => 'mobile-screen',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mobile',
                'icon'     => 'mobile',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Money Bill 1 Wave',
                'icon'     => 'money-bill-1-wave',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Money Bill 1',
                'icon'     => 'money-bill-1',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Money Bill Transfer',
                'icon'     => 'money-bill-transfer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Money Bill Trend Up',
                'icon'     => 'money-bill-trend-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Money Bill Wave',
                'icon'     => 'money-bill-wave',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Money Bill Wheat',
                'icon'     => 'money-bill-wheat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Money Bill',
                'icon'     => 'money-bill',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Money Bills',
                'icon'     => 'money-bills',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Money Check Dollar',
                'icon'     => 'money-check-dollar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Money Check',
                'icon'     => 'money-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Monument',
                'icon'     => 'monument',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Moon',
                'icon'     => 'moon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Mortar Pestle',
                'icon'     => 'mortar-pestle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mosque',
                'icon'     => 'mosque',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mosquito Net',
                'icon'     => 'mosquito-net',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mosquito',
                'icon'     => 'mosquito',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Motorcycle',
                'icon'     => 'motorcycle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mound',
                'icon'     => 'mound',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mountain City',
                'icon'     => 'mountain-city',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mountain Sun',
                'icon'     => 'mountain-sun',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mountain',
                'icon'     => 'mountain',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mug Hot',
                'icon'     => 'mug-hot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Mug Saucer',
                'icon'     => 'mug-saucer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Music',
                'icon'     => 'music',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'N',
                'icon'     => 'n',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Naira Sign',
                'icon'     => 'naira-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Network Wired',
                'icon'     => 'network-wired',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Neuter',
                'icon'     => 'neuter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Newspaper',
                'icon'     => 'newspaper',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Not Equal',
                'icon'     => 'not-equal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Notdef',
                'icon'     => 'notdef',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Note Sticky',
                'icon'     => 'note-sticky',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Notes Medical',
                'icon'     => 'notes-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'O',
                'icon'     => 'o',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Object Group',
                'icon'     => 'object-group',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Object Ungroup',
                'icon'     => 'object-ungroup',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Oil Can',
                'icon'     => 'oil-can',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Oil Well',
                'icon'     => 'oil-well',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Om',
                'icon'     => 'om',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Otter',
                'icon'     => 'otter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Outdent',
                'icon'     => 'outdent',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'P',
                'icon'     => 'p',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pager',
                'icon'     => 'pager',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Paint Roller',
                'icon'     => 'paint-roller',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Paintbrush',
                'icon'     => 'paintbrush',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Palette',
                'icon'     => 'palette',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pallet',
                'icon'     => 'pallet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Panorama',
                'icon'     => 'panorama',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Paper Plane',
                'icon'     => 'paper-plane',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Paperclip',
                'icon'     => 'paperclip',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Parachute Box',
                'icon'     => 'parachute-box',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Paragraph',
                'icon'     => 'paragraph',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Passport',
                'icon'     => 'passport',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Paste',
                'icon'     => 'paste',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Pause',
                'icon'     => 'pause',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Paw',
                'icon'     => 'paw',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Peace',
                'icon'     => 'peace',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pen Clip',
                'icon'     => 'pen-clip',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pen Fancy',
                'icon'     => 'pen-fancy',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pen Nib',
                'icon'     => 'pen-nib',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pen Ruler',
                'icon'     => 'pen-ruler',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pen To Square',
                'icon'     => 'pen-to-square',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Pen',
                'icon'     => 'pen',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pencil',
                'icon'     => 'pencil',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'People Arrows',
                'icon'     => 'people-arrows',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'People Carry Box',
                'icon'     => 'people-carry-box',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'People Group',
                'icon'     => 'people-group',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'People Line',
                'icon'     => 'people-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'People Pulling',
                'icon'     => 'people-pulling',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'People Robbery',
                'icon'     => 'people-robbery',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'People Roof',
                'icon'     => 'people-roof',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pepper Hot',
                'icon'     => 'pepper-hot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Percent',
                'icon'     => 'percent',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Arrow Down To Line',
                'icon'     => 'person-arrow-down-to-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Arrow Up From Line',
                'icon'     => 'person-arrow-up-from-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Biking',
                'icon'     => 'person-biking',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Booth',
                'icon'     => 'person-booth',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Breastfeeding',
                'icon'     => 'person-breastfeeding',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Burst',
                'icon'     => 'person-burst',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Cane',
                'icon'     => 'person-cane',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Chalkboard',
                'icon'     => 'person-chalkboard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Circle Check',
                'icon'     => 'person-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Circle Exclamation',
                'icon'     => 'person-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Circle Minus',
                'icon'     => 'person-circle-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Circle Plus',
                'icon'     => 'person-circle-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Circle Question',
                'icon'     => 'person-circle-question',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Circle Xmark',
                'icon'     => 'person-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Digging',
                'icon'     => 'person-digging',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Dots From Line',
                'icon'     => 'person-dots-from-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Dress Burst',
                'icon'     => 'person-dress-burst',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Dress',
                'icon'     => 'person-dress',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Drowning',
                'icon'     => 'person-drowning',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Falling Burst',
                'icon'     => 'person-falling-burst',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Falling',
                'icon'     => 'person-falling',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Half Dress',
                'icon'     => 'person-half-dress',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Harassing',
                'icon'     => 'person-harassing',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Hiking',
                'icon'     => 'person-hiking',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Military Pointing',
                'icon'     => 'person-military-pointing',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Military Rifle',
                'icon'     => 'person-military-rifle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Military To Person',
                'icon'     => 'person-military-to-person',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Praying',
                'icon'     => 'person-praying',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Pregnant',
                'icon'     => 'person-pregnant',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Rays',
                'icon'     => 'person-rays',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Rifle',
                'icon'     => 'person-rifle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Running',
                'icon'     => 'person-running',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Shelter',
                'icon'     => 'person-shelter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Skating',
                'icon'     => 'person-skating',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Skiing Nordic',
                'icon'     => 'person-skiing-nordic',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Skiing',
                'icon'     => 'person-skiing',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Snowboarding',
                'icon'     => 'person-snowboarding',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Swimming',
                'icon'     => 'person-swimming',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Through Window',
                'icon'     => 'person-through-window',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Walking Arrow Loop Left',
                'icon'     => 'person-walking-arrow-loop-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Walking Arrow Right',
                'icon'     => 'person-walking-arrow-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Walking Dashed Line Arrow Right',
                'icon'     => 'person-walking-dashed-line-arrow-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Walking Luggage',
                'icon'     => 'person-walking-luggage',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Walking With Cane',
                'icon'     => 'person-walking-with-cane',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person Walking',
                'icon'     => 'person-walking',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Person',
                'icon'     => 'person',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Peseta Sign',
                'icon'     => 'peseta-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Peso Sign',
                'icon'     => 'peso-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Phone Flip',
                'icon'     => 'phone-flip',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Phone Slash',
                'icon'     => 'phone-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Phone Volume',
                'icon'     => 'phone-volume',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Phone',
                'icon'     => 'phone',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Photo Film',
                'icon'     => 'photo-film',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Piggy Bank',
                'icon'     => 'piggy-bank',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pills',
                'icon'     => 'pills',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pizza Slice',
                'icon'     => 'pizza-slice',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Place Of Worship',
                'icon'     => 'place-of-worship',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plane Arrival',
                'icon'     => 'plane-arrival',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plane Circle Check',
                'icon'     => 'plane-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plane Circle Exclamation',
                'icon'     => 'plane-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plane Circle Xmark',
                'icon'     => 'plane-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plane Departure',
                'icon'     => 'plane-departure',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plane Lock',
                'icon'     => 'plane-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plane Slash',
                'icon'     => 'plane-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plane Up',
                'icon'     => 'plane-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plane',
                'icon'     => 'plane',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plant Wilt',
                'icon'     => 'plant-wilt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plate Wheat',
                'icon'     => 'plate-wheat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Play',
                'icon'     => 'play',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plug Circle Bolt',
                'icon'     => 'plug-circle-bolt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plug Circle Check',
                'icon'     => 'plug-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plug Circle Exclamation',
                'icon'     => 'plug-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plug Circle Minus',
                'icon'     => 'plug-circle-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plug Circle Plus',
                'icon'     => 'plug-circle-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plug Circle Xmark',
                'icon'     => 'plug-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plug',
                'icon'     => 'plug',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plus Minus',
                'icon'     => 'plus-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Plus',
                'icon'     => 'plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Podcast',
                'icon'     => 'podcast',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Poo Storm',
                'icon'     => 'poo-storm',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Poo',
                'icon'     => 'poo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Poop',
                'icon'     => 'poop',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Power Off',
                'icon'     => 'power-off',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Prescription Bottle Medical',
                'icon'     => 'prescription-bottle-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Prescription Bottle',
                'icon'     => 'prescription-bottle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Prescription',
                'icon'     => 'prescription',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Print',
                'icon'     => 'print',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pump Medical',
                'icon'     => 'pump-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Pump Soap',
                'icon'     => 'pump-soap',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Puzzle Piece',
                'icon'     => 'puzzle-piece',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Q',
                'icon'     => 'q',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Qrcode',
                'icon'     => 'qrcode',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Question',
                'icon'     => 'question',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Quote Left',
                'icon'     => 'quote-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Quote Right',
                'icon'     => 'quote-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'R',
                'icon'     => 'r',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Radiation',
                'icon'     => 'radiation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Radio',
                'icon'     => 'radio',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rainbow',
                'icon'     => 'rainbow',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ranking Star',
                'icon'     => 'ranking-star',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Receipt',
                'icon'     => 'receipt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Record Vinyl',
                'icon'     => 'record-vinyl',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rectangle Ad',
                'icon'     => 'rectangle-ad',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rectangle List',
                'icon'     => 'rectangle-list',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Rectangle Xmark',
                'icon'     => 'rectangle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Recycle',
                'icon'     => 'recycle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Registered',
                'icon'     => 'registered',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Repeat',
                'icon'     => 'repeat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Reply All',
                'icon'     => 'reply-all',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Reply',
                'icon'     => 'reply',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Republican',
                'icon'     => 'republican',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Restroom',
                'icon'     => 'restroom',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Retweet',
                'icon'     => 'retweet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ribbon',
                'icon'     => 'ribbon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Right From Bracket',
                'icon'     => 'right-from-bracket',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Right Left',
                'icon'     => 'right-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Right Long',
                'icon'     => 'right-long',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Right To Bracket',
                'icon'     => 'right-to-bracket',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ring',
                'icon'     => 'ring',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Road Barrier',
                'icon'     => 'road-barrier',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Road Bridge',
                'icon'     => 'road-bridge',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Road Circle Check',
                'icon'     => 'road-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Road Circle Exclamation',
                'icon'     => 'road-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Road Circle Xmark',
                'icon'     => 'road-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Road Lock',
                'icon'     => 'road-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Road Spikes',
                'icon'     => 'road-spikes',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Road',
                'icon'     => 'road',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Robot',
                'icon'     => 'robot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rocket',
                'icon'     => 'rocket',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rotate Left',
                'icon'     => 'rotate-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rotate Right',
                'icon'     => 'rotate-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rotate',
                'icon'     => 'rotate',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Route',
                'icon'     => 'route',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rss',
                'icon'     => 'rss',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ruble Sign',
                'icon'     => 'ruble-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rug',
                'icon'     => 'rug',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ruler Combined',
                'icon'     => 'ruler-combined',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ruler Horizontal',
                'icon'     => 'ruler-horizontal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ruler Vertical',
                'icon'     => 'ruler-vertical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ruler',
                'icon'     => 'ruler',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rupee Sign',
                'icon'     => 'rupee-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Rupiah Sign',
                'icon'     => 'rupiah-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'S',
                'icon'     => 's',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sack Dollar',
                'icon'     => 'sack-dollar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sack Xmark',
                'icon'     => 'sack-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sailboat',
                'icon'     => 'sailboat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Satellite Dish',
                'icon'     => 'satellite-dish',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Satellite',
                'icon'     => 'satellite',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Scale Balanced',
                'icon'     => 'scale-balanced',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Scale Unbalanced Flip',
                'icon'     => 'scale-unbalanced-flip',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Scale Unbalanced',
                'icon'     => 'scale-unbalanced',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'School Circle Check',
                'icon'     => 'school-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'School Circle Exclamation',
                'icon'     => 'school-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'School Circle Xmark',
                'icon'     => 'school-circle-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'School Flag',
                'icon'     => 'school-flag',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'School Lock',
                'icon'     => 'school-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'School',
                'icon'     => 'school',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Scissors',
                'icon'     => 'scissors',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Screwdriver Wrench',
                'icon'     => 'screwdriver-wrench',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Screwdriver',
                'icon'     => 'screwdriver',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Scroll Torah',
                'icon'     => 'scroll-torah',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Scroll',
                'icon'     => 'scroll',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sd Card',
                'icon'     => 'sd-card',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Section',
                'icon'     => 'section',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Seedling',
                'icon'     => 'seedling',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Server',
                'icon'     => 'server',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shapes',
                'icon'     => 'shapes',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Share From Square',
                'icon'     => 'share-from-square',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Share Nodes',
                'icon'     => 'share-nodes',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Share',
                'icon'     => 'share',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sheet Plastic',
                'icon'     => 'sheet-plastic',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shekel Sign',
                'icon'     => 'shekel-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shield Cat',
                'icon'     => 'shield-cat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shield Dog',
                'icon'     => 'shield-dog',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shield Halved',
                'icon'     => 'shield-halved',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shield Heart',
                'icon'     => 'shield-heart',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shield Virus',
                'icon'     => 'shield-virus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shield',
                'icon'     => 'shield',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ship',
                'icon'     => 'ship',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shirt',
                'icon'     => 'shirt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shoe Prints',
                'icon'     => 'shoe-prints',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shop Lock',
                'icon'     => 'shop-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shop Slash',
                'icon'     => 'shop-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shop',
                'icon'     => 'shop',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shower',
                'icon'     => 'shower',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shrimp',
                'icon'     => 'shrimp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shuffle',
                'icon'     => 'shuffle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Shuttle Space',
                'icon'     => 'shuttle-space',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sign Hanging',
                'icon'     => 'sign-hanging',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Signal',
                'icon'     => 'signal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Signature',
                'icon'     => 'signature',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Signs Post',
                'icon'     => 'signs-post',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sim Card',
                'icon'     => 'sim-card',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sink',
                'icon'     => 'sink',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sitemap',
                'icon'     => 'sitemap',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Skull Crossbones',
                'icon'     => 'skull-crossbones',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Skull',
                'icon'     => 'skull',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Slash',
                'icon'     => 'slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sleigh',
                'icon'     => 'sleigh',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sliders',
                'icon'     => 'sliders',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Smog',
                'icon'     => 'smog',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Smoking',
                'icon'     => 'smoking',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Snowflake',
                'icon'     => 'snowflake',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Snowman',
                'icon'     => 'snowman',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Snowplow',
                'icon'     => 'snowplow',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Soap',
                'icon'     => 'soap',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Socks',
                'icon'     => 'socks',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Solar Panel',
                'icon'     => 'solar-panel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sort Down',
                'icon'     => 'sort-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sort Up',
                'icon'     => 'sort-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sort',
                'icon'     => 'sort',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Spa',
                'icon'     => 'spa',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Spaghetti Monster Flying',
                'icon'     => 'spaghetti-monster-flying',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Spell Check',
                'icon'     => 'spell-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Spider',
                'icon'     => 'spider',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Spinner',
                'icon'     => 'spinner',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Splotch',
                'icon'     => 'splotch',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Spoon',
                'icon'     => 'spoon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Spray Can Sparkles',
                'icon'     => 'spray-can-sparkles',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Spray Can',
                'icon'     => 'spray-can',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Arrow Up Right',
                'icon'     => 'square-arrow-up-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Binary',
                'icon'     => 'square-binary',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Caret Down',
                'icon'     => 'square-caret-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Square Caret Left',
                'icon'     => 'square-caret-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Square Caret Right',
                'icon'     => 'square-caret-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Square Caret Up',
                'icon'     => 'square-caret-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Square Check',
                'icon'     => 'square-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Square Envelope',
                'icon'     => 'square-envelope',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Full',
                'icon'     => 'square-full',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Square H',
                'icon'     => 'square-h',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Minus',
                'icon'     => 'square-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Square Nfi',
                'icon'     => 'square-nfi',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Parking',
                'icon'     => 'square-parking',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Pen',
                'icon'     => 'square-pen',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Person Confined',
                'icon'     => 'square-person-confined',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Phone Flip',
                'icon'     => 'square-phone-flip',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Phone',
                'icon'     => 'square-phone',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Plus',
                'icon'     => 'square-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Square Poll Horizontal',
                'icon'     => 'square-poll-horizontal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Poll Vertical',
                'icon'     => 'square-poll-vertical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Root Variable',
                'icon'     => 'square-root-variable',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Rss',
                'icon'     => 'square-rss',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Share Nodes',
                'icon'     => 'square-share-nodes',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Up Right',
                'icon'     => 'square-up-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Virus',
                'icon'     => 'square-virus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square Xmark',
                'icon'     => 'square-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Square',
                'icon'     => 'square',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Staff Snake',
                'icon'     => 'staff-snake',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Stairs',
                'icon'     => 'stairs',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Stamp',
                'icon'     => 'stamp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Stapler',
                'icon'     => 'stapler',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Star And Crescent',
                'icon'     => 'star-and-crescent',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Star Half Stroke',
                'icon'     => 'star-half-stroke',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Star Half',
                'icon'     => 'star-half',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Star Of David',
                'icon'     => 'star-of-david',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Star Of Life',
                'icon'     => 'star-of-life',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Star',
                'icon'     => 'star',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Sterling Sign',
                'icon'     => 'sterling-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Stethoscope',
                'icon'     => 'stethoscope',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Stop',
                'icon'     => 'stop',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Stopwatch 20',
                'icon'     => 'stopwatch-20',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Stopwatch',
                'icon'     => 'stopwatch',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Store Slash',
                'icon'     => 'store-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Store',
                'icon'     => 'store',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Street View',
                'icon'     => 'street-view',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Strikethrough',
                'icon'     => 'strikethrough',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Stroopwafel',
                'icon'     => 'stroopwafel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Subscript',
                'icon'     => 'subscript',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Suitcase Medical',
                'icon'     => 'suitcase-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Suitcase Rolling',
                'icon'     => 'suitcase-rolling',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Suitcase',
                'icon'     => 'suitcase',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sun Plant Wilt',
                'icon'     => 'sun-plant-wilt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Sun',
                'icon'     => 'sun',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Superscript',
                'icon'     => 'superscript',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Swatchbook',
                'icon'     => 'swatchbook',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Synagogue',
                'icon'     => 'synagogue',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Syringe',
                'icon'     => 'syringe',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'T',
                'icon'     => 't',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Table Cells Column Lock',
                'icon'     => 'table-cells-column-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Table Cells Large',
                'icon'     => 'table-cells-large',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Table Cells Row Lock',
                'icon'     => 'table-cells-row-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Table Cells Row Unlock',
                'icon'     => 'table-cells-row-unlock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Table Cells',
                'icon'     => 'table-cells',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Table Columns',
                'icon'     => 'table-columns',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Table List',
                'icon'     => 'table-list',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Table Tennis Paddle Ball',
                'icon'     => 'table-tennis-paddle-ball',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Table',
                'icon'     => 'table',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tablet Button',
                'icon'     => 'tablet-button',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tablet Screen Button',
                'icon'     => 'tablet-screen-button',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tablet',
                'icon'     => 'tablet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tablets',
                'icon'     => 'tablets',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tachograph Digital',
                'icon'     => 'tachograph-digital',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tag',
                'icon'     => 'tag',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tags',
                'icon'     => 'tags',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tape',
                'icon'     => 'tape',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tarp Droplet',
                'icon'     => 'tarp-droplet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tarp',
                'icon'     => 'tarp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Taxi',
                'icon'     => 'taxi',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Teeth Open',
                'icon'     => 'teeth-open',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Teeth',
                'icon'     => 'teeth',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Temperature Arrow Down',
                'icon'     => 'temperature-arrow-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Temperature Arrow Up',
                'icon'     => 'temperature-arrow-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Temperature Empty',
                'icon'     => 'temperature-empty',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Temperature Full',
                'icon'     => 'temperature-full',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Temperature Half',
                'icon'     => 'temperature-half',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Temperature High',
                'icon'     => 'temperature-high',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Temperature Low',
                'icon'     => 'temperature-low',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Temperature Quarter',
                'icon'     => 'temperature-quarter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Temperature Three Quarters',
                'icon'     => 'temperature-three-quarters',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tenge Sign',
                'icon'     => 'tenge-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tent Arrow Down To Line',
                'icon'     => 'tent-arrow-down-to-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tent Arrow Left Right',
                'icon'     => 'tent-arrow-left-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tent Arrow Turn Left',
                'icon'     => 'tent-arrow-turn-left',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tent Arrows Down',
                'icon'     => 'tent-arrows-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tent',
                'icon'     => 'tent',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tents',
                'icon'     => 'tents',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Terminal',
                'icon'     => 'terminal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Text Height',
                'icon'     => 'text-height',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Text Slash',
                'icon'     => 'text-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Text Width',
                'icon'     => 'text-width',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Thermometer',
                'icon'     => 'thermometer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Thumbs Down',
                'icon'     => 'thumbs-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Thumbs Up',
                'icon'     => 'thumbs-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Thumbtack Slash',
                'icon'     => 'thumbtack-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Thumbtack',
                'icon'     => 'thumbtack',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ticket Simple',
                'icon'     => 'ticket-simple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Ticket',
                'icon'     => 'ticket',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Timeline',
                'icon'     => 'timeline',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Toggle Off',
                'icon'     => 'toggle-off',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Toggle On',
                'icon'     => 'toggle-on',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Toilet Paper Slash',
                'icon'     => 'toilet-paper-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Toilet Paper',
                'icon'     => 'toilet-paper',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Toilet Portable',
                'icon'     => 'toilet-portable',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Toilet',
                'icon'     => 'toilet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Toilets Portable',
                'icon'     => 'toilets-portable',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Toolbox',
                'icon'     => 'toolbox',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tooth',
                'icon'     => 'tooth',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Torii Gate',
                'icon'     => 'torii-gate',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tornado',
                'icon'     => 'tornado',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tower Broadcast',
                'icon'     => 'tower-broadcast',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tower Cell',
                'icon'     => 'tower-cell',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tower Observation',
                'icon'     => 'tower-observation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tractor',
                'icon'     => 'tractor',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Trademark',
                'icon'     => 'trademark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Traffic Light',
                'icon'     => 'traffic-light',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Trailer',
                'icon'     => 'trailer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Train Subway',
                'icon'     => 'train-subway',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Train Tram',
                'icon'     => 'train-tram',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Train',
                'icon'     => 'train',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Transgender',
                'icon'     => 'transgender',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Trash Arrow Up',
                'icon'     => 'trash-arrow-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Trash Can Arrow Up',
                'icon'     => 'trash-can-arrow-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Trash Can',
                'icon'     => 'trash-can',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Trash',
                'icon'     => 'trash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tree City',
                'icon'     => 'tree-city',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tree',
                'icon'     => 'tree',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Triangle Exclamation',
                'icon'     => 'triangle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Trophy',
                'icon'     => 'trophy',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Trowel Bricks',
                'icon'     => 'trowel-bricks',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Trowel',
                'icon'     => 'trowel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Arrow Right',
                'icon'     => 'truck-arrow-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Droplet',
                'icon'     => 'truck-droplet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Fast',
                'icon'     => 'truck-fast',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Field Un',
                'icon'     => 'truck-field-un',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Field',
                'icon'     => 'truck-field',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Front',
                'icon'     => 'truck-front',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Medical',
                'icon'     => 'truck-medical',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Monster',
                'icon'     => 'truck-monster',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Moving',
                'icon'     => 'truck-moving',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Pickup',
                'icon'     => 'truck-pickup',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Plane',
                'icon'     => 'truck-plane',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck Ramp Box',
                'icon'     => 'truck-ramp-box',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Truck',
                'icon'     => 'truck',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tty',
                'icon'     => 'tty',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Turkish Lira Sign',
                'icon'     => 'turkish-lira-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Turn Down',
                'icon'     => 'turn-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Turn Up',
                'icon'     => 'turn-up',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Tv',
                'icon'     => 'tv',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'U',
                'icon'     => 'u',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Umbrella Beach',
                'icon'     => 'umbrella-beach',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Umbrella',
                'icon'     => 'umbrella',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Underline',
                'icon'     => 'underline',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Universal Access',
                'icon'     => 'universal-access',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Unlock Keyhole',
                'icon'     => 'unlock-keyhole',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Unlock',
                'icon'     => 'unlock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Up Down Left Right',
                'icon'     => 'up-down-left-right',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Up Down',
                'icon'     => 'up-down',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Up Long',
                'icon'     => 'up-long',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Up Right And Down Left From Center',
                'icon'     => 'up-right-and-down-left-from-center',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Up Right From Square',
                'icon'     => 'up-right-from-square',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Upload',
                'icon'     => 'upload',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Astronaut',
                'icon'     => 'user-astronaut',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Check',
                'icon'     => 'user-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Clock',
                'icon'     => 'user-clock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Doctor',
                'icon'     => 'user-doctor',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Gear',
                'icon'     => 'user-gear',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Graduate',
                'icon'     => 'user-graduate',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Group',
                'icon'     => 'user-group',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Injured',
                'icon'     => 'user-injured',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Large Slash',
                'icon'     => 'user-large-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Large',
                'icon'     => 'user-large',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Lock',
                'icon'     => 'user-lock',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Minus',
                'icon'     => 'user-minus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Ninja',
                'icon'     => 'user-ninja',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Nurse',
                'icon'     => 'user-nurse',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Pen',
                'icon'     => 'user-pen',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Plus',
                'icon'     => 'user-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Secret',
                'icon'     => 'user-secret',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Shield',
                'icon'     => 'user-shield',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Slash',
                'icon'     => 'user-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Tag',
                'icon'     => 'user-tag',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Tie',
                'icon'     => 'user-tie',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User Xmark',
                'icon'     => 'user-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'User',
                'icon'     => 'user',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Users Between Lines',
                'icon'     => 'users-between-lines',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Users Gear',
                'icon'     => 'users-gear',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Users Line',
                'icon'     => 'users-line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Users Rays',
                'icon'     => 'users-rays',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Users Rectangle',
                'icon'     => 'users-rectangle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Users Slash',
                'icon'     => 'users-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Users Viewfinder',
                'icon'     => 'users-viewfinder',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Users',
                'icon'     => 'users',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Utensils',
                'icon'     => 'utensils',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'V',
                'icon'     => 'v',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Van Shuttle',
                'icon'     => 'van-shuttle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Vault',
                'icon'     => 'vault',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Vector Square',
                'icon'     => 'vector-square',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Venus Double',
                'icon'     => 'venus-double',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Venus Mars',
                'icon'     => 'venus-mars',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Venus',
                'icon'     => 'venus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Vest Patches',
                'icon'     => 'vest-patches',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Vest',
                'icon'     => 'vest',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Vial Circle Check',
                'icon'     => 'vial-circle-check',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Vial Virus',
                'icon'     => 'vial-virus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Vial',
                'icon'     => 'vial',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Vials',
                'icon'     => 'vials',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Video Slash',
                'icon'     => 'video-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Video',
                'icon'     => 'video',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Vihara',
                'icon'     => 'vihara',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Virus Covid Slash',
                'icon'     => 'virus-covid-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Virus Covid',
                'icon'     => 'virus-covid',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Virus Slash',
                'icon'     => 'virus-slash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Virus',
                'icon'     => 'virus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Viruses',
                'icon'     => 'viruses',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Voicemail',
                'icon'     => 'voicemail',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Volcano',
                'icon'     => 'volcano',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Volleyball',
                'icon'     => 'volleyball',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Volume High',
                'icon'     => 'volume-high',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Volume Low',
                'icon'     => 'volume-low',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Volume Off',
                'icon'     => 'volume-off',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Volume Xmark',
                'icon'     => 'volume-xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Vr Cardboard',
                'icon'     => 'vr-cardboard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'W',
                'icon'     => 'w',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Walkie Talkie',
                'icon'     => 'walkie-talkie',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wallet',
                'icon'     => 'wallet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wand Magic Sparkles',
                'icon'     => 'wand-magic-sparkles',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wand Magic',
                'icon'     => 'wand-magic',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wand Sparkles',
                'icon'     => 'wand-sparkles',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Warehouse',
                'icon'     => 'warehouse',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Water Ladder',
                'icon'     => 'water-ladder',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Water',
                'icon'     => 'water',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wave Square',
                'icon'     => 'wave-square',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Web Awesome',
                'icon'     => 'web-awesome',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'brands',
                    ],
            ],
            [
                'name'     => 'Weight Hanging',
                'icon'     => 'weight-hanging',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Weight Scale',
                'icon'     => 'weight-scale',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wheat Awn Circle Exclamation',
                'icon'     => 'wheat-awn-circle-exclamation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wheat Awn',
                'icon'     => 'wheat-awn',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wheelchair Move',
                'icon'     => 'wheelchair-move',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wheelchair',
                'icon'     => 'wheelchair',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Whiskey Glass',
                'icon'     => 'whiskey-glass',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wifi',
                'icon'     => 'wifi',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wind',
                'icon'     => 'wind',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Window Maximize',
                'icon'     => 'window-maximize',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Window Minimize',
                'icon'     => 'window-minimize',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Window Restore',
                'icon'     => 'window-restore',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                        'regular',
                    ],
            ],
            [
                'name'     => 'Wine Bottle',
                'icon'     => 'wine-bottle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wine Glass Empty',
                'icon'     => 'wine-glass-empty',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wine Glass',
                'icon'     => 'wine-glass',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Won Sign',
                'icon'     => 'won-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Worm',
                'icon'     => 'worm',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Wrench',
                'icon'     => 'wrench',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'X Ray',
                'icon'     => 'x-ray',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'X',
                'icon'     => 'x',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Xmark',
                'icon'     => 'xmark',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Xmarks Lines',
                'icon'     => 'xmarks-lines',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Y',
                'icon'     => 'y',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Yen Sign',
                'icon'     => 'yen-sign',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Yin Yang',
                'icon'     => 'yin-yang',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => 'Z',
                'icon'     => 'z',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'solid',
                    ],
            ],
            [
                'name'     => '42 Group',
                'icon'     => '42-group',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => '500px',
                'icon'     => '500px',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Accessible Icon',
                'icon'     => 'accessible-icon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Accusoft',
                'icon'     => 'accusoft',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Adn',
                'icon'     => 'adn',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Adversal',
                'icon'     => 'adversal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Affiliatetheme',
                'icon'     => 'affiliatetheme',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Airbnb',
                'icon'     => 'airbnb',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Algolia',
                'icon'     => 'algolia',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Alipay',
                'icon'     => 'alipay',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Amazon Pay',
                'icon'     => 'amazon-pay',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Amazon',
                'icon'     => 'amazon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Amilia',
                'icon'     => 'amilia',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Android',
                'icon'     => 'android',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Angellist',
                'icon'     => 'angellist',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Angrycreative',
                'icon'     => 'angrycreative',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Angular',
                'icon'     => 'angular',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'App Store Ios',
                'icon'     => 'app-store-ios',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'App Store',
                'icon'     => 'app-store',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Apper',
                'icon'     => 'apper',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Apple Pay',
                'icon'     => 'apple-pay',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Apple',
                'icon'     => 'apple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Artstation',
                'icon'     => 'artstation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Asymmetrik',
                'icon'     => 'asymmetrik',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Atlassian',
                'icon'     => 'atlassian',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Audible',
                'icon'     => 'audible',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Autoprefixer',
                'icon'     => 'autoprefixer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Avianex',
                'icon'     => 'avianex',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Aviato',
                'icon'     => 'aviato',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Aws',
                'icon'     => 'aws',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bandcamp',
                'icon'     => 'bandcamp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Battle Net',
                'icon'     => 'battle-net',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Behance',
                'icon'     => 'behance',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bilibili',
                'icon'     => 'bilibili',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bimobject',
                'icon'     => 'bimobject',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bitbucket',
                'icon'     => 'bitbucket',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bitcoin',
                'icon'     => 'bitcoin',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bity',
                'icon'     => 'bity',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Black Tie',
                'icon'     => 'black-tie',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Blackberry',
                'icon'     => 'blackberry',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Blogger B',
                'icon'     => 'blogger-b',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Blogger',
                'icon'     => 'blogger',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bluesky',
                'icon'     => 'bluesky',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bluetooth B',
                'icon'     => 'bluetooth-b',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bluetooth',
                'icon'     => 'bluetooth',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bootstrap',
                'icon'     => 'bootstrap',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Bots',
                'icon'     => 'bots',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Brave Reverse',
                'icon'     => 'brave-reverse',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Brave',
                'icon'     => 'brave',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Btc',
                'icon'     => 'btc',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Buffer',
                'icon'     => 'buffer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Buromobelexperte',
                'icon'     => 'buromobelexperte',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Buy N Large',
                'icon'     => 'buy-n-large',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Buysellads',
                'icon'     => 'buysellads',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Canadian Maple Leaf',
                'icon'     => 'canadian-maple-leaf',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cc Amazon Pay',
                'icon'     => 'cc-amazon-pay',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cc Amex',
                'icon'     => 'cc-amex',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cc Apple Pay',
                'icon'     => 'cc-apple-pay',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cc Diners Club',
                'icon'     => 'cc-diners-club',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cc Discover',
                'icon'     => 'cc-discover',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cc Jcb',
                'icon'     => 'cc-jcb',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cc Mastercard',
                'icon'     => 'cc-mastercard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cc Paypal',
                'icon'     => 'cc-paypal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cc Stripe',
                'icon'     => 'cc-stripe',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cc Visa',
                'icon'     => 'cc-visa',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Centercode',
                'icon'     => 'centercode',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Centos',
                'icon'     => 'centos',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Chrome',
                'icon'     => 'chrome',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Chromecast',
                'icon'     => 'chromecast',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cloudflare',
                'icon'     => 'cloudflare',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cloudscale',
                'icon'     => 'cloudscale',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cloudsmith',
                'icon'     => 'cloudsmith',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cloudversify',
                'icon'     => 'cloudversify',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cmplid',
                'icon'     => 'cmplid',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Codepen',
                'icon'     => 'codepen',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Codiepie',
                'icon'     => 'codiepie',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Confluence',
                'icon'     => 'confluence',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Connectdevelop',
                'icon'     => 'connectdevelop',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Contao',
                'icon'     => 'contao',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cotton Bureau',
                'icon'     => 'cotton-bureau',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cpanel',
                'icon'     => 'cpanel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons By',
                'icon'     => 'creative-commons-by',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Nc Eu',
                'icon'     => 'creative-commons-nc-eu',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Nc Jp',
                'icon'     => 'creative-commons-nc-jp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Nc',
                'icon'     => 'creative-commons-nc',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Nd',
                'icon'     => 'creative-commons-nd',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Pd Alt',
                'icon'     => 'creative-commons-pd-alt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Pd',
                'icon'     => 'creative-commons-pd',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Remix',
                'icon'     => 'creative-commons-remix',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Sa',
                'icon'     => 'creative-commons-sa',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Sampling Plus',
                'icon'     => 'creative-commons-sampling-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Sampling',
                'icon'     => 'creative-commons-sampling',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Share',
                'icon'     => 'creative-commons-share',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons Zero',
                'icon'     => 'creative-commons-zero',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Creative Commons',
                'icon'     => 'creative-commons',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Critical Role',
                'icon'     => 'critical-role',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Css',
                'icon'     => 'css',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Css3 Alt',
                'icon'     => 'css3-alt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Css3',
                'icon'     => 'css3',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Cuttlefish',
                'icon'     => 'cuttlefish',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'D And D Beyond',
                'icon'     => 'd-and-d-beyond',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'D And D',
                'icon'     => 'd-and-d',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Dailymotion',
                'icon'     => 'dailymotion',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Dart Lang',
                'icon'     => 'dart-lang',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Dashcube',
                'icon'     => 'dashcube',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Debian',
                'icon'     => 'debian',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Deezer',
                'icon'     => 'deezer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Delicious',
                'icon'     => 'delicious',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Deploydog',
                'icon'     => 'deploydog',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Deskpro',
                'icon'     => 'deskpro',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Dev',
                'icon'     => 'dev',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Deviantart',
                'icon'     => 'deviantart',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Dhl',
                'icon'     => 'dhl',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Diaspora',
                'icon'     => 'diaspora',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Digg',
                'icon'     => 'digg',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Digital Ocean',
                'icon'     => 'digital-ocean',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Discord',
                'icon'     => 'discord',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Discourse',
                'icon'     => 'discourse',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Dochub',
                'icon'     => 'dochub',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Docker',
                'icon'     => 'docker',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Draft2digital',
                'icon'     => 'draft2digital',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Dribbble',
                'icon'     => 'dribbble',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Dropbox',
                'icon'     => 'dropbox',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Drupal',
                'icon'     => 'drupal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Dyalog',
                'icon'     => 'dyalog',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Earlybirds',
                'icon'     => 'earlybirds',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ebay',
                'icon'     => 'ebay',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Edge Legacy',
                'icon'     => 'edge-legacy',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Edge',
                'icon'     => 'edge',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Elementor',
                'icon'     => 'elementor',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ello',
                'icon'     => 'ello',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ember',
                'icon'     => 'ember',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Empire',
                'icon'     => 'empire',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Envira',
                'icon'     => 'envira',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Erlang',
                'icon'     => 'erlang',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ethereum',
                'icon'     => 'ethereum',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Etsy',
                'icon'     => 'etsy',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Evernote',
                'icon'     => 'evernote',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Expeditedssl',
                'icon'     => 'expeditedssl',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Facebook F',
                'icon'     => 'facebook-f',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Facebook Messenger',
                'icon'     => 'facebook-messenger',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Facebook',
                'icon'     => 'facebook',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Fantasy Flight Games',
                'icon'     => 'fantasy-flight-games',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Fedex',
                'icon'     => 'fedex',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Fedora',
                'icon'     => 'fedora',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Figma',
                'icon'     => 'figma',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Files Pinwheel',
                'icon'     => 'files-pinwheel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Firefox Browser',
                'icon'     => 'firefox-browser',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Firefox',
                'icon'     => 'firefox',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'First Order Alt',
                'icon'     => 'first-order-alt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'First Order',
                'icon'     => 'first-order',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Firstdraft',
                'icon'     => 'firstdraft',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Flickr',
                'icon'     => 'flickr',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Flipboard',
                'icon'     => 'flipboard',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Flutter',
                'icon'     => 'flutter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Fly',
                'icon'     => 'fly',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Fonticons Fi',
                'icon'     => 'fonticons-fi',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Fonticons',
                'icon'     => 'fonticons',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Fort Awesome Alt',
                'icon'     => 'fort-awesome-alt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Fort Awesome',
                'icon'     => 'fort-awesome',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Forumbee',
                'icon'     => 'forumbee',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Foursquare',
                'icon'     => 'foursquare',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Free Code Camp',
                'icon'     => 'free-code-camp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Freebsd',
                'icon'     => 'freebsd',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Fulcrum',
                'icon'     => 'fulcrum',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Galactic Republic',
                'icon'     => 'galactic-republic',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Galactic Senate',
                'icon'     => 'galactic-senate',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Get Pocket',
                'icon'     => 'get-pocket',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Gg Circle',
                'icon'     => 'gg-circle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Gg',
                'icon'     => 'gg',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Git Alt',
                'icon'     => 'git-alt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Git',
                'icon'     => 'git',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Github Alt',
                'icon'     => 'github-alt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Github',
                'icon'     => 'github',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Gitkraken',
                'icon'     => 'gitkraken',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Gitlab',
                'icon'     => 'gitlab',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Gitter',
                'icon'     => 'gitter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Glide G',
                'icon'     => 'glide-g',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Glide',
                'icon'     => 'glide',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Gofore',
                'icon'     => 'gofore',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Golang',
                'icon'     => 'golang',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Goodreads G',
                'icon'     => 'goodreads-g',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Goodreads',
                'icon'     => 'goodreads',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Google Drive',
                'icon'     => 'google-drive',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Google Pay',
                'icon'     => 'google-pay',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Google Play',
                'icon'     => 'google-play',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Google Plus G',
                'icon'     => 'google-plus-g',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Google Plus',
                'icon'     => 'google-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Google Scholar',
                'icon'     => 'google-scholar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Google Wallet',
                'icon'     => 'google-wallet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Google',
                'icon'     => 'google',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Gratipay',
                'icon'     => 'gratipay',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Grav',
                'icon'     => 'grav',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Gripfire',
                'icon'     => 'gripfire',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Grunt',
                'icon'     => 'grunt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Guilded',
                'icon'     => 'guilded',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Gulp',
                'icon'     => 'gulp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Hacker News',
                'icon'     => 'hacker-news',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Hackerrank',
                'icon'     => 'hackerrank',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Hashnode',
                'icon'     => 'hashnode',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Hips',
                'icon'     => 'hips',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Hire A Helper',
                'icon'     => 'hire-a-helper',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Hive',
                'icon'     => 'hive',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Hooli',
                'icon'     => 'hooli',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Hornbill',
                'icon'     => 'hornbill',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Hotjar',
                'icon'     => 'hotjar',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Houzz',
                'icon'     => 'houzz',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Html5',
                'icon'     => 'html5',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Hubspot',
                'icon'     => 'hubspot',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ideal',
                'icon'     => 'ideal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Imdb',
                'icon'     => 'imdb',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Instagram',
                'icon'     => 'instagram',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Instalod',
                'icon'     => 'instalod',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Intercom',
                'icon'     => 'intercom',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Internet Explorer',
                'icon'     => 'internet-explorer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Invision',
                'icon'     => 'invision',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ioxhost',
                'icon'     => 'ioxhost',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Itch Io',
                'icon'     => 'itch-io',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Itunes Note',
                'icon'     => 'itunes-note',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Itunes',
                'icon'     => 'itunes',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Java',
                'icon'     => 'java',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Jedi Order',
                'icon'     => 'jedi-order',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Jenkins',
                'icon'     => 'jenkins',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Jira',
                'icon'     => 'jira',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Joget',
                'icon'     => 'joget',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Joomla',
                'icon'     => 'joomla',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Js',
                'icon'     => 'js',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Jsfiddle',
                'icon'     => 'jsfiddle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Jxl',
                'icon'     => 'jxl',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Kaggle',
                'icon'     => 'kaggle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Keybase',
                'icon'     => 'keybase',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Keycdn',
                'icon'     => 'keycdn',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Kickstarter K',
                'icon'     => 'kickstarter-k',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Kickstarter',
                'icon'     => 'kickstarter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Korvue',
                'icon'     => 'korvue',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Laravel',
                'icon'     => 'laravel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Lastfm',
                'icon'     => 'lastfm',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Leanpub',
                'icon'     => 'leanpub',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Less',
                'icon'     => 'less',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Letterboxd',
                'icon'     => 'letterboxd',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Line',
                'icon'     => 'line',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Linkedin In',
                'icon'     => 'linkedin-in',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Linkedin',
                'icon'     => 'linkedin',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Linode',
                'icon'     => 'linode',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Linux',
                'icon'     => 'linux',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Lyft',
                'icon'     => 'lyft',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Magento',
                'icon'     => 'magento',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Mailchimp',
                'icon'     => 'mailchimp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Mandalorian',
                'icon'     => 'mandalorian',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Markdown',
                'icon'     => 'markdown',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Mastodon',
                'icon'     => 'mastodon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Maxcdn',
                'icon'     => 'maxcdn',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Mdb',
                'icon'     => 'mdb',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Medapps',
                'icon'     => 'medapps',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Medium',
                'icon'     => 'medium',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Medrt',
                'icon'     => 'medrt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Meetup',
                'icon'     => 'meetup',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Megaport',
                'icon'     => 'megaport',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Mendeley',
                'icon'     => 'mendeley',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Meta',
                'icon'     => 'meta',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Microblog',
                'icon'     => 'microblog',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Microsoft',
                'icon'     => 'microsoft',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Mintbit',
                'icon'     => 'mintbit',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Mix',
                'icon'     => 'mix',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Mixcloud',
                'icon'     => 'mixcloud',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Mixer',
                'icon'     => 'mixer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Mizuni',
                'icon'     => 'mizuni',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Modx',
                'icon'     => 'modx',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Monero',
                'icon'     => 'monero',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Napster',
                'icon'     => 'napster',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Neos',
                'icon'     => 'neos',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Nfc Directional',
                'icon'     => 'nfc-directional',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Nfc Symbol',
                'icon'     => 'nfc-symbol',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Nimblr',
                'icon'     => 'nimblr',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Node Js',
                'icon'     => 'node-js',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Node',
                'icon'     => 'node',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Npm',
                'icon'     => 'npm',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ns8',
                'icon'     => 'ns8',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Nutritionix',
                'icon'     => 'nutritionix',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Octopus Deploy',
                'icon'     => 'octopus-deploy',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Odnoklassniki',
                'icon'     => 'odnoklassniki',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Odysee',
                'icon'     => 'odysee',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Old Republic',
                'icon'     => 'old-republic',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Opencart',
                'icon'     => 'opencart',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Openid',
                'icon'     => 'openid',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Opensuse',
                'icon'     => 'opensuse',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Opera',
                'icon'     => 'opera',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Optin Monster',
                'icon'     => 'optin-monster',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Orcid',
                'icon'     => 'orcid',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Osi',
                'icon'     => 'osi',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Padlet',
                'icon'     => 'padlet',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Page4',
                'icon'     => 'page4',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Pagelines',
                'icon'     => 'pagelines',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Palfed',
                'icon'     => 'palfed',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Patreon',
                'icon'     => 'patreon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Paypal',
                'icon'     => 'paypal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Perbyte',
                'icon'     => 'perbyte',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Periscope',
                'icon'     => 'periscope',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Phabricator',
                'icon'     => 'phabricator',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Phoenix Framework',
                'icon'     => 'phoenix-framework',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Phoenix Squadron',
                'icon'     => 'phoenix-squadron',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Php',
                'icon'     => 'php',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Pied Piper Alt',
                'icon'     => 'pied-piper-alt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Pied Piper Hat',
                'icon'     => 'pied-piper-hat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Pied Piper Pp',
                'icon'     => 'pied-piper-pp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Pied Piper',
                'icon'     => 'pied-piper',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Pinterest P',
                'icon'     => 'pinterest-p',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Pinterest',
                'icon'     => 'pinterest',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Pix',
                'icon'     => 'pix',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Pixiv',
                'icon'     => 'pixiv',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Playstation',
                'icon'     => 'playstation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Product Hunt',
                'icon'     => 'product-hunt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Pushed',
                'icon'     => 'pushed',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Python',
                'icon'     => 'python',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Qq',
                'icon'     => 'qq',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Quinscape',
                'icon'     => 'quinscape',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Quora',
                'icon'     => 'quora',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'R Project',
                'icon'     => 'r-project',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Raspberry Pi',
                'icon'     => 'raspberry-pi',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ravelry',
                'icon'     => 'ravelry',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'React',
                'icon'     => 'react',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Reacteurope',
                'icon'     => 'reacteurope',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Readme',
                'icon'     => 'readme',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Rebel',
                'icon'     => 'rebel',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Red River',
                'icon'     => 'red-river',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Reddit Alien',
                'icon'     => 'reddit-alien',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Reddit',
                'icon'     => 'reddit',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Redhat',
                'icon'     => 'redhat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Renren',
                'icon'     => 'renren',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Replyd',
                'icon'     => 'replyd',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Researchgate',
                'icon'     => 'researchgate',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Resolving',
                'icon'     => 'resolving',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Rev',
                'icon'     => 'rev',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Rocketchat',
                'icon'     => 'rocketchat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Rockrms',
                'icon'     => 'rockrms',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Rust',
                'icon'     => 'rust',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Safari',
                'icon'     => 'safari',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Salesforce',
                'icon'     => 'salesforce',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Sass',
                'icon'     => 'sass',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Schlix',
                'icon'     => 'schlix',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Screenpal',
                'icon'     => 'screenpal',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Scribd',
                'icon'     => 'scribd',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Searchengin',
                'icon'     => 'searchengin',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Sellcast',
                'icon'     => 'sellcast',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Sellsy',
                'icon'     => 'sellsy',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Servicestack',
                'icon'     => 'servicestack',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Shirtsinbulk',
                'icon'     => 'shirtsinbulk',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Shoelace',
                'icon'     => 'shoelace',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Shopify',
                'icon'     => 'shopify',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Shopware',
                'icon'     => 'shopware',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Signal Messenger',
                'icon'     => 'signal-messenger',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Simplybuilt',
                'icon'     => 'simplybuilt',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Sistrix',
                'icon'     => 'sistrix',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Sith',
                'icon'     => 'sith',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Sitrox',
                'icon'     => 'sitrox',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Sketch',
                'icon'     => 'sketch',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Skyatlas',
                'icon'     => 'skyatlas',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Skype',
                'icon'     => 'skype',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Slack',
                'icon'     => 'slack',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Slideshare',
                'icon'     => 'slideshare',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Snapchat',
                'icon'     => 'snapchat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Soundcloud',
                'icon'     => 'soundcloud',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Sourcetree',
                'icon'     => 'sourcetree',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Space Awesome',
                'icon'     => 'space-awesome',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Speakap',
                'icon'     => 'speakap',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Speaker Deck',
                'icon'     => 'speaker-deck',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Spotify',
                'icon'     => 'spotify',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Behance',
                'icon'     => 'square-behance',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Bluesky',
                'icon'     => 'square-bluesky',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Dribbble',
                'icon'     => 'square-dribbble',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Facebook',
                'icon'     => 'square-facebook',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Font Awesome Stroke',
                'icon'     => 'square-font-awesome-stroke',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Font Awesome',
                'icon'     => 'square-font-awesome',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Git',
                'icon'     => 'square-git',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Github',
                'icon'     => 'square-github',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Gitlab',
                'icon'     => 'square-gitlab',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Google Plus',
                'icon'     => 'square-google-plus',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Hacker News',
                'icon'     => 'square-hacker-news',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Instagram',
                'icon'     => 'square-instagram',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Js',
                'icon'     => 'square-js',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Lastfm',
                'icon'     => 'square-lastfm',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Letterboxd',
                'icon'     => 'square-letterboxd',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Odnoklassniki',
                'icon'     => 'square-odnoklassniki',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Pied Piper',
                'icon'     => 'square-pied-piper',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Pinterest',
                'icon'     => 'square-pinterest',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Reddit',
                'icon'     => 'square-reddit',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Snapchat',
                'icon'     => 'square-snapchat',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Steam',
                'icon'     => 'square-steam',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Threads',
                'icon'     => 'square-threads',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Tumblr',
                'icon'     => 'square-tumblr',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Twitter',
                'icon'     => 'square-twitter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Upwork',
                'icon'     => 'square-upwork',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Viadeo',
                'icon'     => 'square-viadeo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Vimeo',
                'icon'     => 'square-vimeo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Web Awesome Stroke',
                'icon'     => 'square-web-awesome-stroke',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Web Awesome',
                'icon'     => 'square-web-awesome',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Whatsapp',
                'icon'     => 'square-whatsapp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square X Twitter',
                'icon'     => 'square-x-twitter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Xing',
                'icon'     => 'square-xing',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Square Youtube',
                'icon'     => 'square-youtube',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Squarespace',
                'icon'     => 'squarespace',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Stack Exchange',
                'icon'     => 'stack-exchange',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Stack Overflow',
                'icon'     => 'stack-overflow',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Stackpath',
                'icon'     => 'stackpath',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Staylinked',
                'icon'     => 'staylinked',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Steam Symbol',
                'icon'     => 'steam-symbol',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Steam',
                'icon'     => 'steam',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Sticker Mule',
                'icon'     => 'sticker-mule',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Strava',
                'icon'     => 'strava',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Stripe S',
                'icon'     => 'stripe-s',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Stripe',
                'icon'     => 'stripe',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Stubber',
                'icon'     => 'stubber',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Studiovinari',
                'icon'     => 'studiovinari',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Stumbleupon Circle',
                'icon'     => 'stumbleupon-circle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Stumbleupon',
                'icon'     => 'stumbleupon',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Superpowers',
                'icon'     => 'superpowers',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Supple',
                'icon'     => 'supple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Suse',
                'icon'     => 'suse',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Swift',
                'icon'     => 'swift',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Symfony',
                'icon'     => 'symfony',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Teamspeak',
                'icon'     => 'teamspeak',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Telegram',
                'icon'     => 'telegram',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Tencent Weibo',
                'icon'     => 'tencent-weibo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'The Red Yeti',
                'icon'     => 'the-red-yeti',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Themeco',
                'icon'     => 'themeco',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Themeisle',
                'icon'     => 'themeisle',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Think Peaks',
                'icon'     => 'think-peaks',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Threads',
                'icon'     => 'threads',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Tiktok',
                'icon'     => 'tiktok',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Trade Federation',
                'icon'     => 'trade-federation',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Trello',
                'icon'     => 'trello',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Tumblr',
                'icon'     => 'tumblr',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Twitch',
                'icon'     => 'twitch',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Twitter',
                'icon'     => 'twitter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Typo3',
                'icon'     => 'typo3',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Uber',
                'icon'     => 'uber',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ubuntu',
                'icon'     => 'ubuntu',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Uikit',
                'icon'     => 'uikit',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Umbraco',
                'icon'     => 'umbraco',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Uncharted',
                'icon'     => 'uncharted',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Uniregistry',
                'icon'     => 'uniregistry',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Unity',
                'icon'     => 'unity',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Unsplash',
                'icon'     => 'unsplash',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Untappd',
                'icon'     => 'untappd',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ups',
                'icon'     => 'ups',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Upwork',
                'icon'     => 'upwork',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Usb',
                'icon'     => 'usb',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Usps',
                'icon'     => 'usps',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Ussunnah',
                'icon'     => 'ussunnah',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Vaadin',
                'icon'     => 'vaadin',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Viacoin',
                'icon'     => 'viacoin',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Viadeo',
                'icon'     => 'viadeo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Viber',
                'icon'     => 'viber',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Vimeo V',
                'icon'     => 'vimeo-v',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Vimeo',
                'icon'     => 'vimeo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Vine',
                'icon'     => 'vine',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Vk',
                'icon'     => 'vk',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Vnv',
                'icon'     => 'vnv',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Vuejs',
                'icon'     => 'vuejs',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Watchman Monitoring',
                'icon'     => 'watchman-monitoring',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Waze',
                'icon'     => 'waze',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Webflow',
                'icon'     => 'webflow',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Weebly',
                'icon'     => 'weebly',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Weibo',
                'icon'     => 'weibo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Weixin',
                'icon'     => 'weixin',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Whatsapp',
                'icon'     => 'whatsapp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Whmcs',
                'icon'     => 'whmcs',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wikipedia W',
                'icon'     => 'wikipedia-w',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Windows',
                'icon'     => 'windows',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wirsindhandwerk',
                'icon'     => 'wirsindhandwerk',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wix',
                'icon'     => 'wix',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wizards Of The Coast',
                'icon'     => 'wizards-of-the-coast',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wodu',
                'icon'     => 'wodu',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wolf Pack Battalion',
                'icon'     => 'wolf-pack-battalion',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wordpress Simple',
                'icon'     => 'wordpress-simple',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wordpress',
                'icon'     => 'wordpress',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wpbeginner',
                'icon'     => 'wpbeginner',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wpexplorer',
                'icon'     => 'wpexplorer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wpforms',
                'icon'     => 'wpforms',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Wpressr',
                'icon'     => 'wpressr',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'X Twitter',
                'icon'     => 'x-twitter',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Xbox',
                'icon'     => 'xbox',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Xing',
                'icon'     => 'xing',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Y Combinator',
                'icon'     => 'y-combinator',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Yahoo',
                'icon'     => 'yahoo',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Yammer',
                'icon'     => 'yammer',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Yandex International',
                'icon'     => 'yandex-international',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Yandex',
                'icon'     => 'yandex',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Yarn',
                'icon'     => 'yarn',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Yelp',
                'icon'     => 'yelp',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Yoast',
                'icon'     => 'yoast',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Youtube',
                'icon'     => 'youtube',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
            [
                'name'     => 'Zhihu',
                'icon'     => 'zhihu',
                'category' => 'font-awesome',
                'type'     =>
                    [
                        'brands',
                    ],
            ],
        ];

        return Eventy::filter( 'ds.icons.iconsList', $icons );
    }

}

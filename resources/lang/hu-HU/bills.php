<?php

return [

    'bill_number'           => 'Bizonylat száma',
    'bill_date'             => 'Bizonylat dátuma',
    'total_price'           => 'Teljes ár',
    'due_date'              => 'Esedékesség dátuma',
    'order_number'          => 'Rendelési azonosító',
    'bill_from'             => 'Számla kiállítója:',

    'quantity'              => 'Mennyiség',
    'price'                 => 'Ár',
    'sub_total'             => 'Részösszeg',
    'discount'              => 'Kedvezmény',
    'item_discount'         => '
Vonalkedvezmény',
    'tax_total'             => 'Adó összesen',
    'total'                 => 'Összesen',

    'item_name'             => 'Tétel megnevezése',

    'show_discount'         => ':discount% kedvezmény',
    'add_discount'          => 'Kedvezmény hozzáadása',
    'discount_desc'         => 'a részösszegből',

    'payment_due'           => 'Fizetés esedékessége',
    'amount_due'            => 'Esedékes összeg',
    'paid'                  => 'Fizetve',
    'histories'             => 'Múltbeli adatok',
    'payments'              => 'Kifizetések',
    'add_payment'           => 'Kifizetés hozzáadása',
    'mark_paid'             => 'Megjelölve kifizetettként',
    'mark_received'         => 'Megjelölés megkapottként',
    'mark_cancelled'        => 'Megjelölt mégsem',
    'download_pdf'          => 'Letöltés PDF-ként',
    'send_mail'             => 'Email küldése',
    'create_bill'           => '
Számla létrehozása',
    'receive_bill'          => 'Kapott számla',
    'make_payment'          => 'Fizetettnek jelöl',

    'statuses' => [
        'draft'             => 'Piszkozat',
        'received'          => 'Kapott',
        'partial'           => 'Részlegesen',
        'paid'              => 'Fizetve',
        'overdue'           => 'Lejárt',
        'unpaid'            => 'Kifizetetlen',
        'cancelled'         => 'Megszakítva',
    ],

    'messages' => [
        'marked_received'   => '
Számlát beérkezettként jelölték meg!',
        'marked_paid'       => '
Számlát fizetettként jelölték meg!',
        'marked_cancelled'  => '
Számlát megszakítottként jelölték meg!',
        'draft'             => 'Ez egy <b> DRAFT </b> számla, és az elküldés után megjelenik a diagramokban.',

        'status' => [
            'created'       => 'Létrehozás dátuma',
            'receive' => [
                'draft'     => 'Nem küldött',
                'received'  => 'Létrehozás dátuma',
            ],
            'paid' => [
                'await'     => '
Fizetésre vár',
            ],
        ],
    ],

];

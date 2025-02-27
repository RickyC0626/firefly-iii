<?php

/**
 * form.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                   => 'Bank navn',
    'bank_balance'                => 'Saldo',
    'savings_balance'             => 'Saldo for opsparingskonto',
    'credit_card_limit'           => 'Kreditkort grænse',
    'automatch'                   => 'Automatisk afstemning',
    'skip'                        => 'Spring over',
    'enabled'                     => 'Aktiveret',
    'name'                        => 'Navn',
    'active'                      => 'Aktiv',
    'amount_min'                  => 'Minimumsbeløb',
    'amount_max'                  => 'Maksimumbeløb',
    'match'                       => 'Matcher på',
    'strict'                      => 'Strikt tilstand',
    'repeat_freq'                 => 'Gentagelser',
    'object_group'                => 'Gruppe',
    'location'                    => 'Sted',
    'update_channel'              => 'Opdateringskanal',
    'currency_id'                 => 'Valuta',
    'transaction_currency_id'     => 'Valuta',
    'auto_budget_currency_id'     => 'Valuta',
    'external_ip'                 => 'Din servers eksterne IP',
    'attachments'                 => 'Vedhæftninger',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Bekræft adgangskodesikkerhed',
    'source_account'              => 'Kildekonto',
    'destination_account'         => 'Destinationskonto',
    'asset_destination_account'   => 'Destinationskonto',
    'include_net_worth'           => 'Inkludér i formue',
    'asset_source_account'        => 'Kildekonto',
    'journal_description'         => 'Beskrivelse',
    'note'                        => 'Bemærkninger',
    'currency'                    => 'Valuta',
    'account_id'                  => 'Aktivkonto',
    'budget_id'                   => 'Budget',
    'bill_id'                     => 'Regning',
    'opening_balance'             => 'Startsaldo',
    'tagMode'                     => 'Tag tilstand',
    'virtual_balance'             => 'Virtuel saldo',
    'targetamount'                => 'Målbeløb',
    'account_role'                => 'Kontorolle',
    'opening_balance_date'        => 'Dato for startsaldo',
    'cc_type'                     => 'Kreditkort betalingsplan',
    'cc_monthly_payment_date'     => 'Månedlig betalingsdato for kreditkort',
    'piggy_bank_id'               => '"Sparegris"',
    'returnHere'                  => 'Tilbage hertil',
    'returnHereExplanation'       => 'Efter lagring, vend tilbage hertil for at oprette endnu en.',
    'returnHereUpdateExplanation' => 'Efter opdatering, vend tilbage hertil.',
    'description'                 => 'Beskrivelse',
    'expense_account'             => 'Udgiftskonto',
    'revenue_account'             => 'Indtægtskonto',
    'decimal_places'              => 'Decimaltegn',
    'destination_amount'          => 'Beløb (destination)',
    'new_email_address'           => 'Ny emailadresse',
    'verification'                => 'Verificering',
    'api_key'                     => 'API nøgle',
    'remember_me'                 => 'Husk mig',
    'liability_type_id'           => 'Gældstype',
    'liability_type'              => 'Gældstype',
    'interest'                    => 'Rente',
    'interest_period'             => 'Renteperiode',
    'extension_date'              => 'Dato for forlængelse',
    'type'                        => 'Type',
    'convert_Withdrawal'          => 'Konverter hævning',
    'convert_Deposit'             => 'Konverter indbetaling',
    'convert_Transfer'            => 'Konverter overførsel',
    'amount'                      => 'Beløb',
    'foreign_amount'              => 'Fremmed beløb',
    'date'                        => 'Dato',
    'interest_date'               => 'Rentedato',
    'book_date'                   => 'Bogføringsdato',
    'process_date'                => 'Behandlingsdato',
    'category'                    => 'Kategori',
    'tags'                        => 'Tags',
    'deletePermanently'           => 'Slet permanent',
    'cancel'                      => 'Annuller',
    'targetdate'                  => 'Måldato',
    'startdate'                   => 'Start dato',
    'tag'                         => 'Tag',
    'under'                       => 'Under',
    'symbol'                      => 'Symbol',
    'code'                        => 'Kode',
    'iban'                        => 'IBAN',
    'account_number'              => 'Kontonummer',
    'creditCardNumber'            => 'Kreditkortnummer',
    'has_headers'                 => 'Sidehoveder',
    'date_format'                 => 'Datoformat',
    'specifix'                    => 'Bank- eller filspecifikke rettelser',
    'attachments[]'               => 'Vedhæftninger',
    'title'                       => 'Titel',
    'notes'                       => 'Bemærkninger',
    'filename'                    => 'Filnavn',
    'mime'                        => 'Mime type',
    'size'                        => 'Størrelse',
    'trigger'                     => 'Udløser',
    'stop_processing'             => 'Stop behandling',
    'start_date'                  => 'Start på området',
    'end_date'                    => 'Slut på området',
    'enddate'                     => 'Slut dato',
    'start'                       => 'Start på området',
    'end'                         => 'Slut på området',
    'delete_account'              => 'Slet konto ":name"',
    'delete_webhook'              => 'Delete webhook ":title"',
    'delete_bill'                 => 'Slet regning ":name"',
    'delete_budget'               => 'Slet budget ":name"',
    'delete_category'             => 'Slet kategori ":name"',
    'delete_currency'             => 'Slet valuta ":name"',
    'delete_journal'              => 'Slet transaktion med beskrivelsen ":description"',
    'delete_attachment'           => 'Slet vedhæftningen ":name"',
    'delete_rule'                 => 'Slet regel ":title"',
    'delete_rule_group'           => 'Slet regelgruppe ":title"',
    'delete_link_type'            => 'Slet linktype ":name"',
    'delete_user'                 => 'Slet bruger ":email"',
    'delete_recurring'            => 'Slet tilbagevendende transaktion ":title"',
    'user_areYouSure'             => 'Hvis du sletter brugeren ":email", vil alt være væk. Du kan ikke fortryde. Hvis du sletter dig selv, vil du miste adgang til denne instans af Firefly III.',
    'attachment_areYouSure'       => 'Er du sikker på, at du vil slette den vedhæftede fil med navnet ":name"?',
    'account_areYouSure'          => 'Er du sikker på, at du vil slette kontoen med navnet ":name"?',
    'account_areYouSure_js'       => 'Er du sikker på, at du vil slette kontoen med navnet "{name}"?',
    'bill_areYouSure'             => 'Er du sikker på, at du vil slette regningen med navnet ":name"?',
    'rule_areYouSure'             => 'Er du sikker på du vil slette reglen benævnt ":title"?',
    'object_group_areYouSure'     => 'Er du sikker på du vil slette gruppen benævnt ":title"?',
    'ruleGroup_areYouSure'        => 'Er du sikker på du vil slette regelsætsgruppen benævnt ":title"?',
    'budget_areYouSure'           => 'Er du sikker på, at du vil slette budgettet benævnt ":name"?',
    'webhook_areYouSure'           => 'Are you sure you want to delete the webhook named ":title"?',
    'category_areYouSure'         => 'Er du sikker på, at du vil slette kategorien ":name"?',
    'recurring_areYouSure'        => 'Er du sikker på, at du vil slette den periodiske transaktion benævnt ":title"?',
    'currency_areYouSure'         => 'Er du sikker på, at du vil slette ":name" valuetaen?',
    'piggyBank_areYouSure'        => 'Er du sikker på, at du vil slette "sparebøssen", der hedder ":name"?',
    'journal_areYouSure'          => 'Er du sikker på, at du vil slette transaktionen beskrevet med ":description"?',
    'mass_journal_are_you_sure'   => 'Er du sikker på, at du vil slette disse transaktioner?',
    'tag_areYouSure'              => 'Er du sikker på, at du vil slette tagget ":tag"?',
    'journal_link_areYouSure'     => 'Er du sikker på, at du vil slette linket mellem <a href=":source_link">:source</a> og <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Er du sikker på, at du vil slette linktypen ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Når du sletter inhold i Firefly III er dette permanent og kan ikke fortrydes.',
    'mass_make_selection'         => 'Du kan stadig forhindre elementer i at blive slettet ved at fjerne markeringen.',
    'delete_all_permanently'      => 'Slet valgte permanent',
    'update_all_journals'         => 'Opdater disse transaktioner',
    'also_delete_transactions'    => 'Den eneste transaktion, der er forbundet til denne konto, vil også blive slettet.|Alle :count transaktioner forbundet til denne konto vil også blive slettet.',
    'also_delete_transactions_js' => 'Ingen transaktioner|Den eneste transaktion, der er forbundet til denne konto, vil også blive slettet.|Alle {count} transaktioner forbundet til denne konto vil også blive slettet.',
    'also_delete_connections'     => 'Den eneste transaktion, der er knyttet til denne linktype, vil miste denne tilknytning.|Alle :count transaktioner, der er knyttet til denne linktype, vil miste deres tilknytning.',
    'also_delete_rules'           => 'Den eneste regel, der er forbundet til dette regelsæt, vil også blive slettet.|Alle :count regler forbundet til dette regelsæt, vil også blive slettet.',
    'also_delete_piggyBanks'      => 'Den eneste "sparebøsse" forbundet til denne konto vil også blive slettet.|Alle :count "sparebøsser" forbundet til denne konto vil også blive slettet.',
    'also_delete_piggyBanks_js'   => 'Ingen sparebøsser|Den eneste "sparebøsse" forbundet til denne konto vil også blive slettet.|Alle {count} "sparebøsser" forbundet til denne konto vil også blive slettet.',
    'not_delete_piggy_banks'      => 'Den "sparebøsse" tilknyttet til denne gruppe vil ikke blive slettet.|De :count "sparebøsser" som er tilknyttet til denne gruppe vil ikke blive slettet.',
    'bill_keep_transactions'      => 'Den eneste transaktion, der er forbundet til denne regning, vil også blive slettet.|Alle :count transaktioner forbundet til regning konto vil også blive slettet.',
    'budget_keep_transactions'    => 'Den eneste transaktion, der er tilknyttet til dette budget, vil ikke blive slettet.|Alle :count transaktioner tilknyttet til dette budget vil undgå sletning.',
    'category_keep_transactions'  => 'Den eneste transaktion, der er tilknyttet denne kategori, vil ikke blive slettet.|Alle :count transaktioner tilknyttet denne kategori vil ikke blive slettet.',
    'recurring_keep_transactions' => 'Den eneste transaktion, der er oprettet ved denne periodiske transaktion, vil ikke blive slettet.|Alle :count transaktioner oprettet ved denne periodiske transaktion vil ikke blive slettet.',
    'tag_keep_transactions'       => 'Den eneste transaktion, der er forbundet til dette tag, vil ikke blive slettet.|Alle :count transaktioner forbundet til dette tag vil ikke blive slettet.',
    'check_for_updates'           => 'Søg efter opdateringer',
    'liability_direction'         => 'Passiv ind/ud',
    'delete_object_group'         => 'Slet gruppen ":title"',
    'email'                       => 'Email adresse',
    'password'                    => 'Adgangskode',
    'password_confirmation'       => 'Adgangskode (igen)',
    'blocked'                     => 'Blokeret?',
    'blocked_code'                => 'Årsag til blokering',
    'login_name'                  => 'Login',
    'is_owner'                    => 'Er administrator?',
    'url'                         => 'URL',
    'bill_end_date'               => 'Slut dato',

    // import
    'apply_rules'                 => 'Anvend regler',
    'artist'                      => 'Kunstner',
    'album'                       => 'Album',
    'song'                        => 'Sang',


    // admin
    'domain'                      => 'Domæne',
    'single_user_mode'            => 'Deaktivér brugerregistrering',
    'is_demo_site'                => 'Er demoside',

    // import
    'configuration_file'          => 'Konfigurationsfil',
    'csv_comma'                   => 'Et komma (,)',
    'csv_semicolon'               => 'Et semikolon (;)',
    'csv_tab'                     => 'En fane (usynlig)',
    'csv_delimiter'               => 'CSV feltafgrænser',
    'client_id'                   => 'Klient ID',
    'app_id'                      => 'App ID',
    'secret'                      => 'Hemmelighed',
    'public_key'                  => 'Offentlig nøgle',
    'country_code'                => 'Landekode',
    'provider_code'               => 'Bank eller data udbyder',
    'fints_url'                   => 'FinTS API URL',
    'fints_port'                  => 'Port',
    'fints_bank_code'             => 'Bank kode',
    'fints_username'              => 'Brugernavn',
    'fints_password'              => 'Pinkode / Adgangskode',
    'fints_account'               => 'FinTS konto',
    'local_account'               => 'Firefly III konto',
    'from_date'                   => 'Dato fra',
    'to_date'                     => 'Dato til',
    'due_date'                    => 'Forfaldsdato',
    'payment_date'                => 'Betalingsdato',
    'invoice_date'                => 'Fakturadato',
    'internal_reference'          => 'Intern reference',
    'inward'                      => 'Indgående beskrivelse',
    'outward'                     => 'Udgående beskrivelse',
    'rule_group_id'               => 'Regelgruppe',
    'transaction_description'     => 'Transaktions beskrivelse',
    'first_date'                  => 'Første dato',
    'transaction_type'            => 'Transaktionstype',
    'repeat_until'                => 'Gentag indtil',
    'recurring_description'       => 'Tilbagevendende transaktionsbeskrivelse',
    'repetition_type'             => 'Gentagelsestype',
    'foreign_currency_id'         => 'Fremmed valuta',
    'repetition_end'              => 'Gentagelse slutter',
    'repetitions'                 => 'Gentagelser',
    'calendar'                    => 'Kalender',
    'weekend'                     => 'Weekend',
    'client_secret'               => 'Klient hemmelig',
    'withdrawal_destination_id'   => 'Destinationskonto',
    'deposit_source_id'           => 'Kildekonto',
    'expected_on'                 => 'Forventet den',
    'paid'                        => 'Betalt',
    'auto_budget_type'            => 'Auto-budget',
    'auto_budget_amount'          => 'Auto-budget beløb',
    'auto_budget_period'          => 'Auto-budget periode',
    'collected'                   => 'Indsamlet',
    'submitted'                   => 'Indsendt',
    'key'                         => 'Nøgle',
    'value'                       => 'Indholdet af post',
    'webhook_delivery'            => 'Delivery',
    'webhook_response'            => 'Response',
    'webhook_trigger'             => 'Trigger',
];

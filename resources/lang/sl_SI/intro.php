<?php

/**
 * intro.php
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
    // index
    'index_intro'                           => 'Dobrodošli na osnovni strani Firefly III. Vzemi si čas za sprehod skozi ta uvod, da dobiš občutek, kako Firefly III deluje.',
    'index_accounts-chart'                  => 'Ta diagram prikazuje trenutno stanje tvojih računov sredstev. V nastavitvah lahko izbereš račune, ki so vidni tukaj.',
    'index_box_out_holder'                  => 'To polje in polja poleg tega ti bodo omogočila hiter pregled tvoje finančne situacije.',
    'index_help'                            => 'Če potrebuješ pomoč na strani ali obrazcu, pritisni ta gumb.',
    'index_outro'                           => 'Večina strani Firefly III se bo začela z malo predstavitvijo, kot je ta. Če imaš vprašanja ali pripombe, se obrni name. Uživaj!',
    'index_sidebar-toggle'                  => 'Za ustvarjanje novih transakcij, računov ali drugih stvari uporabi meni pod to ikono.',
    'index_cash_account'                    => 'These are the accounts created so far. You can use the cash account to track cash expenses but it\'s not mandatory of course.',

    // transactions
    'transactions_create_basic_info'        => 'Enter the basic information of your transaction. Source, destination, date and description.',
    'transactions_create_amount_info'       => 'Enter the amount of the transaction. If necessary the fields will auto-update for foreign amount info.',
    'transactions_create_optional_info'     => 'All of these fields are optional. Adding meta-data here will make your transactions better organised.',
    'transactions_create_split'             => 'If you want to split a transaction, add more splits with this button',

    // create account:
    'accounts_create_iban'                  => 'Svojim računom dodeli veljaven IBAN. To lahko zelo olajša uvoz podatkov v prihodnosti.',
    'accounts_create_asset_opening_balance' => 'Računi sredstev imajo lahko "začetno stanje", kar označuje začetek zgodovine tega računa v Firefly III.',
    'accounts_create_asset_currency'        => 'Firefly III podpira več valut. Računi sredstev imajo eno glavno valuto, ki jo nastaviš tukaj.',
    'accounts_create_asset_virtual'         => 'Včasih lahko računu nastaviš virtualno stanje: dodaten znesek, ki se vedno doda ali odstrani od dejanskega stanja.',

    // budgets index
    'budgets_index_intro'                   => 'Proračuni se uporabljajo za upravljanje tvojih financ in tvorijo eno od ključnih funkcij Firefly III.',
    'budgets_index_set_budget'              => 'Določi svoj celotni proračun za vsako obdobje, tako da ti lahko Firefly III pove, če si predvideli vsa razpoložljiva sredstva.',
    'budgets_index_see_expenses_bar'        => 'Poraba denarja bo počasi zapolnila to vrstico.',
    'budgets_index_navigate_periods'        => 'Krmarjenje po obdobjih omogoča preprosto predčasno nastavitev proračunov.',
    'budgets_index_new_budget'              => 'Ustvari nove proračune, kot se ti zdi primerno.',
    'budgets_index_list_of_budgets'         => 'S to tabelo določi zneske za vsak proračun in si oglej, kako napreduješ.',
    'budgets_index_outro'                   => 'Če želiš izvedeti več o pripravi proračuna, preveri ikono pomoči v zgornjem desnem kotu.',

    // reports (index)
    'reports_index_intro'                   => 'S temi poročili dobiš podroben vpogled v svoje finance.',
    'reports_index_inputReportType'         => 'Izberi vrsto poročila. Oglej si strani za pomoč, če želiš videti, kaj ti vsako poročilo prikazuje.',
    'reports_index_inputAccountsSelect'     => 'Račune sredstev lahko izključiš ali vključiš, kot se ti zdi primerno.',
    'reports_index_inputDateRange'          => 'Izbrano časovno obdobje je v celoti odvisno od tebe: od enega dneva do 10 let.',
    'reports_index_extra-options-box'       => 'Glede na izbrano poročilo lahko tukaj izbereš dodatne filtre in možnosti. Opazuj polje, ko spreminjaš vrste poročil.',

    // reports (reports)
    'reports_report_default_intro'          => 'This report will give you a quick and comprehensive overview of your finances. If you wish to see anything else, please don\'t hestitate to contact me!',
    'reports_report_audit_intro'            => 'This report will give you detailed insights in your asset accounts.',
    'reports_report_audit_optionsBox'       => 'Use these check boxes to show or hide the columns you are interested in.',

    'reports_report_category_intro'                  => 'This report will give you insight in one or multiple categories.',
    'reports_report_category_pieCharts'              => 'These charts will give you insight in expenses and income per category or per account.',
    'reports_report_category_incomeAndExpensesChart' => 'This chart shows your expenses and income per category.',

    'reports_report_tag_intro'                  => 'This report will give you insight in one or multiple tags.',
    'reports_report_tag_pieCharts'              => 'These charts will give you insight in expenses and income per tag, account, category or budget.',
    'reports_report_tag_incomeAndExpensesChart' => 'This chart shows your expenses and income per tag.',

    'reports_report_budget_intro'                             => 'This report will give you insight in one or multiple budgets.',
    'reports_report_budget_pieCharts'                         => 'These charts will give you insight in expenses per budget or per account.',
    'reports_report_budget_incomeAndExpensesChart'            => 'This chart shows your expenses per budget.',

    // create transaction
    'transactions_create_switch_box'                          => 'Use these buttons to quickly switch the type of transaction you wish to save.',
    'transactions_create_ffInput_category'                    => 'You can freely type in this field. Previously created categories will be suggested.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Link your withdrawal to a budget for better financial control.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Use this dropdown when your withdrawal is in another currency.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Use this dropdown when your deposit is in another currency.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Select a piggy bank and link this transfer to your savings.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'This field shows you how much you\'ve saved in each piggy bank.',
    'piggy-banks_index_button'                                => 'Next to this progress bar are two buttons (+ and -) to add or remove money from each piggy bank.',
    'piggy-banks_index_accountStatus'                         => 'For each asset account with at least one piggy bank the status is listed in this table.',

    // create piggy
    'piggy-banks_create_name'                                 => 'What is your goal? A new couch, a camera, money for emergencies?',
    'piggy-banks_create_date'                                 => 'You can set a target date or a deadline for your piggy bank.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'This chart will show the history of this piggy bank.',
    'piggy-banks_show_piggyDetails'                           => 'Some details about your piggy bank',
    'piggy-banks_show_piggyEvents'                            => 'Any additions or removals are also listed here.',

    // bill index
    'bills_index_rules'                                       => 'Here you see which rules will check if this bill is hit',
    'bills_index_paid_in_period'                              => 'This field indicates when the bill was last paid.',
    'bills_index_expected_in_period'                          => 'This field indicates for each bill if and when the next bill is expected to hit.',

    // show bill
    'bills_show_billInfo'                                     => 'This table shows some general information about this bill.',
    'bills_show_billButtons'                                  => 'Use this button to re-scan old transactions so they will be matched to this bill.',
    'bills_show_billChart'                                    => 'This chart shows the transactions linked to this bill.',

    // create bill
    'bills_create_intro'                                      => 'Use bills to track the amount of money you\'re due every period. Think about expenses like rent, insurance or mortgage payments.',
    'bills_create_name'                                       => 'Use a descriptive name such as "Rent" or "Health insurance".',
    //'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Select a minimum and maximum amount for this bill.',
    'bills_create_repeat_freq_holder'                         => 'Most bills repeat monthly, but you can set another frequency here.',
    'bills_create_skip_holder'                                => 'If a bill repeats every 2 weeks, the "skip"-field should be set to "1" to skip every other week.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III allows you to manage rules, that will automagically be applied to any transaction you create or edit.',
    'rules_index_new_rule_group'                              => 'You can combine rules in groups for easier management.',
    'rules_index_new_rule'                                    => 'Create as many rules as you like.',
    'rules_index_prio_buttons'                                => 'Order them any way you see fit.',
    'rules_index_test_buttons'                                => 'You can test your rules or apply them to existing transactions.',
    'rules_index_rule-triggers'                               => 'Rules have "triggers" and "actions" that you can order by drag-and-drop.',
    'rules_index_outro'                                       => 'Be sure to check out the help pages using the (?) icon in the top right!',

    // create rule:
    'rules_create_mandatory'                                  => 'Choose a descriptive title, and set when the rule should be fired.',
    'rules_create_ruletriggerholder'                          => 'Add as many triggers as you like, but remember that ALL triggers must match before any actions are fired.',
    'rules_create_test_rule_triggers'                         => 'Use this button to see which transactions would match your rule.',
    'rules_create_actions'                                    => 'Set as many actions as you like.',

    // preferences
    'preferences_index_tabs'                                  => 'More options are available behind these tabs.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III supports multiple currencies, which you can change on this page.',
    'currencies_index_default'                                => 'Firefly III has one default currency.',
    'currencies_index_buttons'                                => 'Use these buttons to change the default currency or enable other currencies.',

    // create currency
    'currencies_create_code'                                  => 'This code should be ISO compliant (Google it for your new currency).',
];

/*
 * index.js
 * Copyright (c) 2022 james@firefly-iii.org
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

export default {
    "config": {
        "html_language": "sk",
        "month_and_day_fns": "MMMM d, y"
    },
    "form": {
        "name": "N\u00e1zov",
        "amount_min": "Minim\u00e1lna suma",
        "amount_max": "Maxim\u00e1lna suma",
        "url": "URL",
        "title": "N\u00e1zov",
        "first_date": "Prv\u00fd d\u00e1tum",
        "repetitions": "Opakovan\u00ed",
        "description": "Popis",
        "iban": "IBAN",
        "skip": "Presko\u010di\u0165",
        "date": "D\u00e1tum"
    },
    "list": {
        "name": "Meno\/N\u00e1zov",
        "account_number": "Account number",
        "currentBalance": "Aktu\u00e1lny zostatok",
        "lastActivity": "Posledn\u00e1 aktivita",
        "active": "Akt\u00edvne?"
    },
    "breadcrumbs": {
        "placeholder": "[Placeholder]",
        "budgets": "Budgets",
        "subscriptions": "Subscriptions",
        "transactions": "Transactions",
        "title_expenses": "Expenses",
        "title_withdrawal": "Expenses",
        "title_revenue": "Revenue \/ income",
        "title_deposit": "Revenue \/ income",
        "title_transfer": "Transfers",
        "title_transfers": "Transfers",
        "asset_accounts": "Asset accounts",
        "expense_accounts": "Expense accounts",
        "revenue_accounts": "Revenue accounts",
        "liabilities_accounts": "Liabilities"
    },
    "firefly": {
        "actions": "Akcie",
        "edit": "Upravi\u0165",
        "delete": "Odstr\u00e1ni\u0165",
        "reconcile": "Vy\u00fa\u010dtova\u0165",
        "create_new_asset": "Vytvori\u0165 nov\u00fd \u00fa\u010det akt\u00edv",
        "confirm_action": "Confirm action",
        "new_budget": "Nov\u00fd rozpo\u010det",
        "new_asset_account": "Nov\u00fd \u00fa\u010det akt\u00edv",
        "newTransfer": "Nov\u00fd p\u0159evod",
        "submission_options": "(firefly.submission_options)",
        "apply_rules_checkbox": "(firefly.apply_rules_checkbox)",
        "fire_webhooks_checkbox": "(firefly.fire_webhooks_checkbox)",
        "newDeposit": "Nov\u00fd vklad",
        "newWithdrawal": "Nov\u00fd v\u00fddavok",
        "bills_paid": "Zaplaten\u00e9 \u00fa\u010dty",
        "left_to_spend": "Zost\u00e1va k \u00fatrate",
        "no_budget": "(\u017eiadny rozpo\u010det)",
        "budgeted": "Rozpo\u010dtovan\u00e9",
        "spent": "Utraten\u00e9",
        "no_bill": "(\u017eiadny \u00fa\u010det)",
        "rule_trigger_source_account_starts_choice": "N\u00e1zov zdrojov\u00e9ho \u00fa\u010dtu za\u010d\u00edna..",
        "rule_trigger_source_account_ends_choice": "N\u00e1zov zdrojov\u00e9ho \u00fa\u010dtu kon\u010d\u00ed..",
        "rule_trigger_source_account_is_choice": "N\u00e1zov zdrojov\u00e9ho \u00fa\u010dtu je..",
        "rule_trigger_source_account_contains_choice": "N\u00e1zov zdrojov\u00e9ho \u00fa\u010dtu obsahuje..",
        "rule_trigger_account_id_choice": "Either account ID is exactly..",
        "rule_trigger_source_account_id_choice": "ID zdrojov\u00e9ho \u00fa\u010dtu je presne..",
        "rule_trigger_destination_account_id_choice": "N\u00e1zov cie\u013eov\u00e9ho \u00fa\u010dtu je presne..",
        "rule_trigger_account_is_cash_choice": "Either account is cash",
        "rule_trigger_source_is_cash_choice": "Zdrojov\u00fd \u00fa\u010det je (hotovostn\u00fd) \u00fa\u010det",
        "rule_trigger_destination_is_cash_choice": "Cie\u013eov\u00fd \u00fa\u010det je (hotovostn\u00fd) \u00fa\u010det",
        "rule_trigger_source_account_nr_starts_choice": "\u010c\u00edslo cie\u013eov\u00e9ho \u00fa\u010dtu \/ IBAN za\u010d\u00edna..",
        "rule_trigger_source_account_nr_ends_choice": "\u010c\u00edslo zdrojov\u00e9ho \u00fa\u010dtu \/ IBAN kon\u010d\u00ed..",
        "rule_trigger_source_account_nr_is_choice": "\u010c\u00edslo zdrojov\u00e9ho \u00fa\u010dtu \/ IBAN je..",
        "rule_trigger_source_account_nr_contains_choice": "\u010c\u00edslo zdrojov\u00e9ho \u00fa\u010dtu \/ IBAN obsahuje..",
        "rule_trigger_destination_account_starts_choice": "N\u00e1zov cie\u013eov\u00e9ho \u00fa\u010dtu za\u010d\u00edna..",
        "rule_trigger_destination_account_ends_choice": "N\u00e1zov cie\u013eov\u00e9ho \u00fa\u010dtu kon\u010d\u00ed..",
        "rule_trigger_destination_account_is_choice": "N\u00e1zov cie\u013eov\u00e9ho \u00fa\u010dtu je..",
        "rule_trigger_destination_account_contains_choice": "N\u00e1zov cie\u013eov\u00e9ho \u00fa\u010dtu obsahuje..",
        "rule_trigger_destination_account_nr_starts_choice": "\u010c\u00edslo cie\u013eov\u00e9ho \u00fa\u010dtu \/ IBAN za\u010d\u00edna..",
        "rule_trigger_destination_account_nr_ends_choice": "N\u00e1zov cie\u013eov\u00e9ho \u00fa\u010dtu \/ IBAN kon\u010d\u00ed..",
        "rule_trigger_destination_account_nr_is_choice": "N\u00e1zov cie\u013eov\u00e9ho \u00fa\u010dtu \/ IBAN je..",
        "rule_trigger_destination_account_nr_contains_choice": "N\u00e1zov cie\u013eov\u00e9ho \u00fa\u010dtu \/ IBAN obsahuje..",
        "rule_trigger_transaction_type_choice": "Transakcia je typu..",
        "rule_trigger_category_is_choice": "Kateg\u00f3ria je..",
        "rule_trigger_amount_less_choice": "Suma je ni\u017e\u0161ia ne\u017e..",
        "rule_trigger_amount_is_choice": "Amount is..",
        "rule_trigger_amount_more_choice": "Suma je vy\u0161\u0161ia ne\u017e..",
        "rule_trigger_description_starts_choice": "Popis za\u010d\u00edna..",
        "rule_trigger_description_ends_choice": "Popis kon\u010d\u00ed..",
        "rule_trigger_description_contains_choice": "Popis obsahuje..",
        "rule_trigger_description_is_choice": "Popis je..",
        "rule_trigger_date_on_choice": "Transaction date is..",
        "rule_trigger_date_before_choice": "D\u00e1tum transakcie je pred..",
        "rule_trigger_date_after_choice": "D\u00e1tum transakcie je po..",
        "rule_trigger_created_at_on_choice": "Transaction was made on..",
        "rule_trigger_updated_at_on_choice": "Transaction was last edited on..",
        "rule_trigger_budget_is_choice": "Rozpo\u010det je\u2026",
        "rule_trigger_tag_is_choice": "Any tag is..",
        "rule_trigger_currency_is_choice": "Mena transakcie je..",
        "rule_trigger_foreign_currency_is_choice": "Cudzia mena transakcie je..",
        "rule_trigger_has_attachments_choice": "M\u00e1 po\u010det pr\u00edloh minim\u00e1lne",
        "rule_trigger_has_no_category_choice": "Nem\u00e1 \u017eiadnu kateg\u00f3riu",
        "rule_trigger_has_any_category_choice": "M\u00e1 (\u013eubovo\u013en\u00fa) kateg\u00f3riu",
        "rule_trigger_has_no_budget_choice": "Nem\u00e1 \u017eiadny rozpo\u010det",
        "rule_trigger_has_any_budget_choice": "M\u00e1 (\u013eubovo\u013en\u00fd) rozpo\u010det",
        "rule_trigger_has_no_bill_choice": "Nem\u00e1 \u017eiadny \u00fa\u010det",
        "rule_trigger_has_any_bill_choice": "M\u00e1 (\u013eubovo\u013en\u00fd) \u00fa\u010det",
        "rule_trigger_has_no_tag_choice": "Nem\u00e1 \u017eiadne \u0161t\u00edtky",
        "rule_trigger_has_any_tag_choice": "M\u00e1 jeden alebo viac \u0161t\u00edtkov",
        "rule_trigger_any_notes_choice": "M\u00e1 (ak\u00e9ko\u013evek) pozn\u00e1mky",
        "rule_trigger_no_notes_choice": "Nem\u00e1 \u017eiadne pozn\u00e1mky",
        "rule_trigger_notes_is_choice": "Notes are..",
        "rule_trigger_notes_contains_choice": "Notes contain..",
        "rule_trigger_notes_starts_choice": "Notes start with..",
        "rule_trigger_notes_ends_choice": "Notes end with..",
        "rule_trigger_bill_is_choice": "\u00da\u010det je..",
        "rule_trigger_external_id_is_choice": "External ID is..",
        "rule_trigger_internal_reference_is_choice": "Internal reference is..",
        "rule_trigger_journal_id_choice": "ID denn\u00edka transakci\u00ed je..",
        "rule_trigger_any_external_url_choice": "Transaction has an external URL",
        "rule_trigger_no_external_url_choice": "Transaction has no external URL",
        "rule_trigger_id_choice": "Transaction ID is..",
        "rule_action_delete_transaction_choice": "DELETE transaction(!)",
        "rule_action_set_category_choice": "Set category to ..",
        "rule_action_clear_category_choice": "Odstr\u00e1ni\u0165 v\u0161etky kateg\u00f3rie",
        "rule_action_set_budget_choice": "Set budget to ..",
        "rule_action_clear_budget_choice": "Odste\u00e1ni\u0165 v\u0161etky rozpo\u010dty",
        "rule_action_add_tag_choice": "Add tag ..",
        "rule_action_remove_tag_choice": "Remove tag ..",
        "rule_action_remove_all_tags_choice": "Odstr\u00e1ni\u0165 v\u0161etky \u0161t\u00edtky",
        "rule_action_set_description_choice": "Set description to ..",
        "rule_action_update_piggy_choice": "Add \/ remove transaction amount in piggy bank ..",
        "rule_action_append_description_choice": "Append description with ..",
        "rule_action_prepend_description_choice": "Prepend description with ..",
        "rule_action_set_source_account_choice": "Set source account to ..",
        "rule_action_set_destination_account_choice": "Set destination account to ..",
        "rule_action_append_notes_choice": "Append notes with ..",
        "rule_action_prepend_notes_choice": "Prepend notes with ..",
        "rule_action_clear_notes_choice": "Odstr\u00e1ni\u0165 v\u0161etky pozn\u00e1mky",
        "rule_action_set_notes_choice": "Set notes to ..",
        "rule_action_link_to_bill_choice": "Link to a bill ..",
        "rule_action_convert_deposit_choice": "Zmeni\u0165 t\u00fato transakciu na vklad",
        "rule_action_convert_withdrawal_choice": "Zmeni\u0165 transakciu na v\u00fdb\u011br",
        "rule_action_convert_transfer_choice": "Zmeni\u0165 t\u00fato transakciu na prevod",
        "placeholder": "[Placeholder]",
        "recurrences": "Opakovan\u00e9 transakcie",
        "title_expenses": "V\u00fddavky",
        "title_withdrawal": "V\u00fddavky",
        "title_revenue": "Zisky \/ pr\u00edjmy",
        "pref_1D": "Jeden de\u0148",
        "pref_1W": "Jeden t\u00fd\u017ede\u0148",
        "pref_1M": "Jeden mesiac",
        "pref_3M": "Tri mesiace (\u0161tvr\u0165rok)",
        "pref_6M": "\u0160es\u0165 mesiacov",
        "pref_1Y": "Jeden rok",
        "repeat_freq_yearly": "ro\u010dne",
        "repeat_freq_half-year": "polro\u010dne",
        "repeat_freq_quarterly": "\u0161tvr\u0165ro\u010dne",
        "repeat_freq_monthly": "mesa\u010dne",
        "repeat_freq_weekly": "t\u00fd\u017edenne",
        "single_split": "Roz\u00fa\u010dtova\u0165",
        "asset_accounts": "\u00da\u010dty akt\u00edv",
        "expense_accounts": "V\u00fddavkov\u00e9 \u00fa\u010dty",
        "liabilities_accounts": "Z\u00e1v\u00e4zky",
        "undefined_accounts": "Accounts",
        "name": "N\u00e1zov",
        "revenue_accounts": "V\u00fdnosov\u00e9 \u00fa\u010dty",
        "description": "Popis",
        "category": "Kateg\u00f3ria",
        "title_deposit": "Zisky \/ pr\u00edjmy",
        "title_transfer": "Prevody",
        "title_transfers": "Prevody",
        "piggyBanks": "Pokladni\u010dky",
        "rules": "Pravidl\u00e1",
        "accounts": "\u00da\u010dty",
        "categories": "Kateg\u00f3rie",
        "tags": "\u0160t\u00edtky",
        "object_groups_page_title": "Skupiny",
        "reports": "V\u00fdkazy",
        "webhooks": "Webhooky",
        "currencies": "Meny",
        "administration": "Spr\u00e1va",
        "profile": "Profil",
        "source_account": "Zdrojov\u00fd \u00fa\u010det",
        "destination_account": "Cie\u013eov\u00fd \u00fa\u010det",
        "amount": "Suma",
        "date": "D\u00e1tum",
        "time": "\u010cas",
        "preferences": "Mo\u017enosti",
        "transactions": "Transakcie",
        "balance": "Zostatok",
        "budgets": "Rozpo\u010dty",
        "subscriptions": "Subscriptions",
        "welcome_back": "Ako to ide?",
        "bills_to_pay": "\u00da\u010dty na \u00fahradu",
        "net_worth": "\u010cist\u00e9 imanie",
        "pref_last365": "Last year",
        "pref_last90": "Last 90 days",
        "pref_last30": "Last 30 days",
        "pref_last7": "Last 7 days",
        "pref_YTD": "Year to date",
        "pref_QTD": "Quarter to date",
        "pref_MTD": "Month to date"
    }
}

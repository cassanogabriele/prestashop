<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'tactician.handler.locator.symfony' shared service.

return $this->services['tactician.handler.locator.symfony'] = new \League\Tactician\Bundle\Handler\ContainerBasedHandlerLocator($this, ['PrestaShop\\PrestaShop\\Core\\Domain\\ShowcaseCard\\Command\\CloseShowcaseCardCommand' => 'prestashop.core.showcase_card.command_handler.close_showcase_card', 'PrestaShop\\PrestaShop\\Core\\Domain\\ShowcaseCard\\Query\\GetShowcaseCardIsClosed' => 'prestashop.core.domain.showcase_card.query_handler.get_showcase_card_is_closed_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\SaveSqlRequestSettingsCommand' => 'prestashop.core.domain.sql_management.command_handler.save_settings', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetSqlRequestSettings' => 'prestashop.core.domain.sql_management.query_handler.get_sql_request_settings', 'PrestaShop\\PrestaShop\\Core\\Domain\\Theme\\Command\\ImportThemeCommand' => 'prestashop.core.domain.theme.command_handler.import_theme_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Theme\\Command\\EnableThemeCommand' => 'prestashop.core.domain.theme.command_handler.enable_theme_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Theme\\Command\\DeleteThemeCommand' => 'prestashop.core.domain.theme.command_handler.delete_theme_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Theme\\Command\\AdaptThemeToRTLLanguagesCommand' => 'prestashop.core.domain.theme.command_handler.adapt_theme_to_rtl_languages_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Theme\\Command\\ResetThemeLayoutsCommand' => 'prestashop.core.domain.theme.command_handler.reset_theme_layouts_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\MailTemplate\\Command\\GenerateThemeMailTemplatesCommand' => 'prestashop.core.mail_template.command_handler.generate_theme_mails_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\DeleteAddressCommand' => 'prestashop.adapter.address.command_handler.delete_address_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\BulkDeleteAddressCommand' => 'prestashop.adapter.address.command_handler.bulk_delete_address_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\AddManufacturerAddressCommand' => 'prestashop.adapter.address.command_handler.add_manufacturer_address_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Command\\EditManufacturerAddressCommand' => 'prestashop.adapter.address.command_handler.edit_manufacturer_address_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Address\\Query\\GetManufacturerAddressForEditing' => 'prestashop.adapter.address.query_handler.get_manufacturer_address_for_editing_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\BulkUpdateCategoriesStatusCommand' => 'prestashop.adapter.category.command_handler.bulk_update_categories_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\BulkEnableCategoriesCommand' => 'prestashop.adapter.category.command_handler.bulk_enable_categories_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\BulkDisableCategoriesCommand' => 'prestashop.adapter.category.command_handler.bulk_disable_categories_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\SetCategoryIsEnabledCommand' => 'prestashop.adapter.category.command_handler.set_category_is_enabled_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\DeleteCategoryCommand' => 'prestashop.adapter.category.command_handler.delete_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\BulkDeleteCategoriesCommand' => 'prestashop.adapter.category.command_handler.bulk_delete_categories_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\AddCategoryCommand' => 'prestashop.adapter.category.command_handler.add_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\AddRootCategoryCommand' => 'prestashop.adapter.category.command_handler.add_root_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\EditRootCategoryCommand' => 'prestashop.adapter.category.command_handler.edit_root_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\EditCategoryCommand' => 'prestashop.adapter.category.command_handler.edit_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Query\\GetCategoryForEditing' => 'prestashop.adapter.category.query_handler.get_category_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\DeleteCategoryCoverImageCommand' => 'prestashop.adapter.category.command_handler.delete_category_cover_image_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\DeleteCategoryMenuThumbnailImageCommand' => 'prestashop.adapter.category.command_handler.delete_category_menu_thumbnail_image_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Command\\UpdateCategoryPositionCommand' => 'prestashop.adapter.category.command_handler.update_category_position_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Category\\Query\\GetCategoryIsEnabled' => 'prestashop.adapter.category.command_handler.get_category_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\BulkDisableCmsPageCommand' => 'prestashop.adapter.cms_page.command_handler.bulk_disable_cms_page', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\BulkEnableCmsPageCommand' => 'prestashop.adapter.cms_page.command_handler.bulk_enable_cms_page', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\ToggleCmsPageStatusCommand' => 'prestashop.adapter.cms_page.command_handler.toggle_cms_page_status', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Query\\GetCmsCategoryIdForRedirection' => 'prestashop.adapter.cms_page.query_handler.get_cms_category_id_for_redirection', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\DeleteCmsPageCommand' => 'prestashop.adapter.cms_page.command_handler.delete_cms_page', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\BulkDeleteCmsPageCommand' => 'prestashop.adapter.cms_page.command_handler.bulk_delete_cms_page', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\AddCmsPageCommand' => 'prestashop.adapter.cms_page.command_handler.add_cms_page_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Command\\EditCmsPageCommand' => 'prestashop.adapter.cms_page.command_handler.edit_cms_page_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPage\\Query\\GetCmsPageForEditing' => 'prestashop.adapter.cms_page.query_handler.get_cms_page_for_editing_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\DeleteCmsPageCategoryCommand' => 'prestashop.adapter.cms_page_category.command_handler.delete_cms_page_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\ToggleCmsPageCategoryStatusCommand' => 'prestashop.adapter.cms_page_category.command_handler.toggle_cms_page_category_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\BulkDeleteCmsPageCategoryCommand' => 'prestashop.adapter.cms_page_category.command_handler.bulk_delete_cms_page_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\BulkEnableCmsPageCategoryCommand' => 'prestashop.adapter.cms_page.command_handler.bulk_enable_cms_page_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\BulkDisableCmsPageCategoryCommand' => 'prestashop.adapter.cms_page.command_handler.bulk_disable_cms_page_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\AddCmsPageCategoryCommand' => 'prestashop.adapter.cms_page.command_handler.add_cms_page_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Command\\EditCmsPageCategoryCommand' => 'prestashop.adapter.cms_page.command_handler.edit_cms_page_category_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Query\\GetCmsPageCategoriesForBreadcrumb' => 'prestashop.adapter.cms_page.query_handler.get_cms_page_categories_for_breadcrumbs', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Query\\GetCmsPageParentCategoryIdForRedirection' => 'prestashop.adapter.cms_page.query_handler.get_cms_page_categories_for_redirection', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Query\\GetCmsPageCategoryForEditing' => 'prestashop.adapter.cms_page.query_handler.get_cms_page_category_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\CmsPageCategory\\Query\\GetCmsPageCategoryNameForListing' => 'prestashop.adapter.cms_page.query_handler.get_cms_page_category_name_for_listing', 'PrestaShop\\PrestaShop\\Core\\Domain\\Contact\\Query\\GetContactForEditing' => 'prestashop.adapter.contact.query_handler.get_contact_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\Contact\\Command\\EditContactCommand' => 'prestashop.adapter.contact.command_handler.edit_contact', 'PrestaShop\\PrestaShop\\Core\\Domain\\Contact\\Command\\AddContactCommand' => 'prestashop.adapter.contact.command_handler.add_contact', 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\ToggleCurrencyStatusCommand' => 'prestashop.adapter.currency.command_handler.toggle_currency_status', 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\DeleteCurrencyCommand' => 'prestashop.adapter.currency.command_handler.delete_currency', 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\AddCurrencyCommand' => 'prestashop.adapter.currency.command_handler.create_currency', 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\EditCurrencyCommand' => 'prestashop.adapter.currency.command_handler.update_currency', 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\RefreshExchangeRatesCommand' => 'prestashop.adapter.currency.command_handler.update_exchange_rates', 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Command\\ToggleExchangeRateAutomatizationCommand' => 'prestashop.adapter.currency.command_handler.update_live_exchange_rates', 'PrestaShop\\PrestaShop\\Core\\Domain\\Currency\\Query\\GetCurrencyForEditing' => 'prestashop.adapter.currency.query_handler.get_currency_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\GetCustomerForViewing' => 'prestashop.adapter.customer.query_handler.get_customer_for_viewing', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\SetPrivateNoteAboutCustomerCommand' => 'prestashop.adapter.customer.command_handler.set_private_note_about_customer_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\TransformGuestToCustomerCommand' => 'prestashop.adapter.customer.command_handler.transform_guest_to_customer', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\SetRequiredFieldsForCustomerCommand' => 'prestashop.adapter.customer.command_handler.set_required_fields_for_customer', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\GetRequiredFieldsForCustomer' => 'prestashop.adapter.customer.query_handler.get_required_fields_for_customer', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\AddCustomerCommand' => 'prestashop.adapter.customer.command_handler.add_customer', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\GetCustomerForEditing' => 'prestashop.adapter.customer.query_handler.get_customer_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\EditCustomerCommand' => 'prestashop.adapter.customer.command_handler.edit_customer_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\BulkEnableCustomerCommand' => 'prestashop.adapter.customer.command_handler.bulk_enable_customer_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\BulkDisableCustomerCommand' => 'prestashop.adapter.customer.command_handler.bulk_disable_customer_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\DeleteCustomerCommand' => 'prestashop.adapter.customer.command_handler.delete_customer_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Command\\BulkDeleteCustomerCommand' => 'prestashop.adapter.customer.command_handler.bulk_delete_customer_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Customer\\Query\\SearchCustomers' => 'prestashop.adapter.customer.query_handler.search_customers', 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\ToggleEmployeeStatusCommand' => 'prestashop.adapter.profile.employee.command_handler.toggle_employee_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\BulkUpdateEmployeeStatusCommand' => 'prestashop.adapter.profile.employee.command_handler.bulk_update_employee_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\DeleteEmployeeCommand' => 'prestashop.adapter.profile.employee.command_handler.delete_employee_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\BulkDeleteEmployeeCommand' => 'prestashop.adapter.profile.employee.command_handler.bulk_delete_employee_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Query\\GetEmployeeForEditing' => 'prestashop.adapter.employee.query_handler.get_employee_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\AddEmployeeCommand' => 'prestashop.adapter.employee.command_handler.add_employee_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Employee\\Command\\EditEmployeeCommand' => 'prestashop.adapter.employee.command_handler.edit_employee_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\AddLanguageCommand' => 'prestashop.adapter.language.command_handler.add_language_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\EditLanguageCommand' => 'prestashop.adapter.language.command_handler.edit_language_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Query\\GetLanguageForEditing' => 'prestashop.adapter.language.query_handler.get_language_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\ToggleLanguageStatusCommand' => 'prestashop.adapter.language.command_handler.toggle_language_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\BulkToggleLanguagesStatusCommand' => 'prestashop.adapter.language.command_handler.bulk_toggle_languages_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\BulkDeleteLanguagesCommand' => 'prestashop.adapter.language.command_handler.bulk_delete_languages_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Language\\Command\\DeleteLanguageCommand' => 'prestashop.adapter.language.command_handler.delete_language_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\ToggleManufacturerStatusCommand' => 'prestashop.adapter.manufacturer.command_handler.toggle_manufacturer_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\BulkToggleManufacturerStatusCommand' => 'prestashop.adapter.manufacturer.command_handler.bulk_toggle_manufacturer_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\DeleteManufacturerCommand' => 'prestashop.adapter.manufacturer.command_handler.delete_manufacturer_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\BulkDeleteManufacturerCommand' => 'prestashop.adapter.manufacturer.command_handler.bulk_delete_manufacturer_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Query\\GetManufacturerForEditing' => 'prestashop.adapter.manufacturer.query_handler.get_manufacturer_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\EditManufacturerCommand' => 'prestashop.adapter.manufacturer.command_handler.edit_manufacturer_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Command\\AddManufacturerCommand' => 'prestashop.adapter.manufacturer.command_handler.add_manufacturer_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Manufacturer\\Query\\GetManufacturerForViewing' => 'prestashop.adapter.manufacturer.query_handler.get_manufacturer_for_viewing_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Meta\\Command\\AddMetaCommand' => 'prestashop.adapter.meta.command_handler.save_meta', 'PrestaShop\\PrestaShop\\Core\\Domain\\Meta\\Command\\EditMetaCommand' => 'prestashop.adapter.meta.command_handler.edit_meta', 'PrestaShop\\PrestaShop\\Core\\Domain\\Meta\\Query\\GetMetaForEditing' => 'prestashop.adapter.meta.query_handler.get_meta_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\Meta\\Query\\GetPagesForLayoutCustomization' => 'prestashop.adapter.meta.query_handler.get_pages_for_layout_customization_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Command\\DeleteProfileCommand' => 'prestashop.adapter.profile.command_handler.delete_profile', 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Command\\BulkDeleteProfileCommand' => 'prestashop.adapter.profile.command_handler.bulk_delete_profile', 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Command\\AddProfileCommand' => 'prestashop.adapter.profile.command_handler.add_profile_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Command\\EditProfileCommand' => 'prestashop.adapter.profile.command_handler.edit_profile_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Profile\\Query\\GetProfileForEditing' => 'prestashop.adapter.profile.query_handler.get_profile_for_editing_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Shop\\Command\\UploadLogosCommand' => 'prestashop.adapter.shop.command_handler.upload_logos_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Shop\\Query\\GetLogosPaths' => 'prestashop.adapter.shop.query_handler.get_logos_paths_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\AddSqlRequestCommand' => 'prestashop.adapter.sql_manager.command_handler.add_request_sql', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\EditSqlRequestCommand' => 'prestashop.adapter.sql_manager.command_handler.edit_request_sql', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\DeleteSqlRequestCommand' => 'prestashop.adapter.sql_manager.command_handler.delete_request_sql', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Command\\BulkDeleteSqlRequestCommand' => 'prestashop.adapter.sql_manager.command_handler.bulk_delete_request_sql', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetSqlRequestForEditing' => 'prestashop.adapter.sql_manager.query_handler.get_request_sql_for_editing', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetSqlRequestExecutionResult' => 'prestashop.adapter.sql_manager.query_handler.get_request_sql_execution_result', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetDatabaseTablesList' => 'prestashop.adapter.sql_manager.query_handler.get_database_tables_list', 'PrestaShop\\PrestaShop\\Core\\Domain\\SqlManagement\\Query\\GetDatabaseTableFieldsList' => 'prestashop.adapter.sql_manager.query_handler.get_database_table_fields_list', 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\ToggleSupplierStatusCommand' => 'prestashop.adapter.supplier.command_handler.toggle_supplier_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\DeleteSupplierCommand' => 'prestashop.adapter.supplier.command_handler.delete_supplier_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\BulkDeleteSupplierCommand' => 'prestashop.adapter.supplier.command_handler.bulk_delete_supplier_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\BulkDisableSupplierCommand' => 'prestashop.adapter.supplier.command_handler.bulk_disable_supplier_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Supplier\\Command\\BulkEnableSupplierCommand' => 'prestashop.adapter.supplier.command_handler.bulk_enable_supplier_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\DeleteTaxCommand' => 'prestashop.adapter.tax.command_handler.delete_tax_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\ToggleTaxStatusCommand' => 'prestashop.adapter.tax.command_handler.toggle_tax_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\BulkToggleTaxStatusCommand' => 'prestashop.adapter.tax.command_handler.bulk_toggle_tax_status_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\BulkDeleteTaxCommand' => 'prestashop.adapter.tax.command_handler.bulk_delete_tax_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Query\\GetTaxForEditing' => 'prestashop.adapter.tax.query_handler.get_tax_for_editing_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\EditTaxCommand' => 'prestashop.adapter.tax.command_handler.edit_tax_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Tax\\Command\\AddTaxCommand' => 'prestashop.adapter.tax.command_handler.add_tax_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Webservice\\Query\\GetWebserviceKeyForEditing' => 'prestashop.adapter.webservice.query_handler.get_webservice_key_for_editing_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Webservice\\Command\\AddWebserviceKeyCommand' => 'prestashop.adapter.webservice.command_handler.add_webservice_key_handler', 'PrestaShop\\PrestaShop\\Core\\Domain\\Webservice\\Command\\EditWebserviceKeyCommand' => 'prestashop.adapter.webservice.command_handler.edit_webservice_key_handler']);

(function (api) {

    api.sectionConstructor['microt_ecommerce_import_section'] = api.Section.extend({

        // No events for this type of section.
        attachEvents: function () {
        },

        // Always make the section active.
        isContextuallyActive: function () {
            return true;
        }
    });

})(wp.customize);

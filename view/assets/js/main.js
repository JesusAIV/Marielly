(function () {

    function toggleSection(triggerSelector, targetSelector) {
        $(triggerSelector).on("click touchstart", function (e) {
            e.preventDefault(); // Previene doble activación en móviles
            $(targetSelector).stop().slideToggle(); // Animación compatible
        });
    }

    toggleSection("#description", "#description_text");
    toggleSection("#especification", "#especification_text");

    $(".m-filtros-close").on("click touchstart", function (e) {
        e.preventDefault();
        $(".container-filtros-mobile").fadeOut();
    });

    $(".btn-filtros_mobile").on("click touchstart", function (e) {
        e.preventDefault();
        $(".container-filtros-mobile").fadeIn();
    });

    $(document).ready(function () {
        $('#myTable').DataTable({
            responsive: true,
            searching: false,
            lengthChange: false,
            ordering: false,
            info: false,
            language: {
                url: "view/assets/json/es-ES.json"
            }
        });

        $('#TableResumen').DataTable({
            responsive: true,
            searching: false,
            lengthChange: false,
            ordering: false,
            info: false,
            language: {
                url: "view/assets/json/es-ES.json"
            }
        });

        $('.quantity').each(function () {
            const $container = $(this);
            const $input = $container.find('input[type="number"]');
            const min = parseInt($input.attr('min')) || 1;
            const max = parseInt($input.attr('max')) || Infinity;
            const step = parseInt($input.attr('step')) || 1;

            $container.find('.plus').on("click touchstart", function (e) {
                e.preventDefault();
                let current = parseInt($input.val()) || 0;
                if (current < max) {
                    $input.val(current + step).change();
                }
            });

            $container.find('.minus').on("click touchstart", function (e) {
                e.preventDefault();
                let current = parseInt($input.val()) || 0;
                if (current > min) {
                    $input.val(current - step).change();
                }
            });
        });
    });

})();

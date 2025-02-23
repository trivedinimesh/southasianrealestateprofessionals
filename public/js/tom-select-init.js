document.addEventListener('DOMContentLoaded', function() {
    var singleElements = document.querySelectorAll('.tom-select-single');
    singleElements.forEach(function(element) {
        new TomSelect(element, {
            create: true,
            sortField: {
                field: "text",
                direction: "asc"
            }
        });
    });

    var multipleElements = document.querySelectorAll('.tom-select-multiple');
    multipleElements.forEach(function(element) {
        new TomSelect(element, {
            plugins: ['remove_button'],
            create: true,
            maxItems: null
        });
    });

var multipleElements = document.querySelectorAll('.tom-select-multiple-search');
    multipleElements.forEach(function(element) {
        new TomSelect(element, {
            plugins: ['remove_button'],
            maxItems: null
        });
    });
});
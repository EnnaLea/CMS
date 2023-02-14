

$(function () {
    $('#summernote').summernote({
        heigth: 200
    });

    // alert('hello');

    $('#selectAllBoxes').on("click", function (event) {
        if (this.checked) {
            $('.checkBoxes').each(function () {
                this.checked = true;
            });
        } else {
            $('.checkBoxes').each(function () {
                this.checked = false;
            });
        }
    });

});

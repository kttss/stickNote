$(document).ready(function () {
    $('.btn-signup').on('click', function () {
        $('.login-form').hide('fast');
        $('.signup-form').show("slow");
    });

    $('.login-btn').on('click', function () {
        $('.signup-form').hide('fast');
        $('.login-form').show('slow');
    });

    $('.btn-edit').on('click', function (e) {
        const note = $(e.currentTarget).parents('.sticky');
        let titre = $(note).find('h3').text().trim();
        let text = $(note).find('p').text().trim();
        let id = $(note).data('id');
        console.log(id);
        $('#id').val(id);
        $('#titreinp').val(titre);
        $('#textinp').val(text);

        $('#noteform').find("input[type='submit']").val("Modifier");
        $('#noteform').attr('action', './note_update.php');

    })



});
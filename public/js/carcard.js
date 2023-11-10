document.getElementById('carid').addEventListener('change', function(event) {
    var selectedImage = document.getElementById('selectedCarId');
    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function() {
        selectedImage.src = reader.result;
    }

    reader.readAsDataURL(file);
});

document.getElementById('image').addEventListener('change', function(event) {
    var selectedImage = document.getElementById('selectedCarImage');
    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function() {
        selectedImage.src = reader.result;
    }

    reader.readAsDataURL(file);


});
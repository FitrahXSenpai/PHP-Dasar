// AJAX

// // Ambil Element yang akan dibutuhkan

// var Keyword = document.getElementById('keyword');
// var TombolCari = document.getElementById('tombol-cari');
// var Container = document.getElementById('container');

// // Tambahkan Event ketika TombolCari ditekan/diclick 
// // TombolCari.addEventListener('click', function() {
// //     alert('Berhasil');
// // });

// // Tambahkan Event ketika Keyword ditulis

// Keyword.addEventListener('keyup', function() {
    
//     // Membuat Objek AJAX

//     var xhr = new XMLHttpRequest();
    
//     // Mengecek Kesiapan AJAX

//     xhr.onreadystatechange = function() {
//         if ( xhr.readyState == 4 && xhr.status == 200) {
//             Container.innerHTML = xhr.responseText;
//         }
//     }

//     // Mengeksekusi AJAX

//     xhr.open('GET', 'ajax/anime.php?keyword=' + Keyword.value, true);
//     xhr.send();

// });

// JQUERY

$(document).ready(function() {

    // Menghilangkan Tombol Cari
    
    $('#tombol-cari').hide();

    // Event ketika keyword ditulis    
    
    $('#keyword').on('keyup', function() {
        
        // Munculkan Icon Loading

        $('.loader').show();

        // AJAX Menggunakan Load 

        // $('#container').load('ajax/anime.php?keyword=' + $('#keyword').val());

        // AJAX Menggunakan $.get()

        $.get('ajax/anime.php?keyword=' + $('#keyword').val(), function(data) {
            $('#container').html(data);
            $('.loader').hide();
        });

    });

});





















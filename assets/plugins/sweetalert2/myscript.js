const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swall({
        title: 'Data',
        text: 'Berhasil' + flashData,
        type: 'success'
    })
} 
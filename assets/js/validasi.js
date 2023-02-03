$('document').ready(function(){
        
  //validasi nik
  $('#nik').blur(function(){
    $('#warning-nik').hide();
    $('#warning-nik').html('<img style="margin-left:10px; width:10px" src="assets/img/loading.gif">');
    var nik = $(this).val();
    if (nik=='') {
      $('#warning-nik').show();
      $('#warning-nik').html('&#10060; NIK Tidak Boleh Kosong.');
    }else{
      $.ajax({
        type  : 'POST',
        url   : 'validasi-nik.php',
        data  : 'nik='+nik,
        success : function(data){
          $('#warning-nik').show();
          $('#warning-nik').html(data);
        }
      });
    }

  });// end validasi nik

  //validasi hp
  $('#tlp').blur(function(){
    var hp=$(this).val();
    $('#warning-tlp').hide();

    if (hp=='') {
      $('#warning-tlp').show();
      $('#warning-tlp').html('&#10060; Nomor Telepon Tidak Boleh Kosong.');
    }else if(!valid_hp(hp)){
        $('#warning-tlp').show();
        $('#warning-tlp').html('&#10060; Nomor Telepon Tidak Valid.');
      } else {
        var len=hp.length;
        if (len > 0 && len <= 7){
          $('#warning-tlp').show();
          $('#warning-tlp').html('&#10060; Nomor Telepon Terlalu Sedikit.');
        } else if (len > 13){
          $('#warning-tlp').show();
          $('#warning-tlp').html('&#10060; Nomor Telepon Terlalu Panjang.');
        }
      }
  });

  //fungsi pengecekan nomor hp
  function valid_hp(hp){
    var pola = new RegExp(/^[0-9-+]+$/);
    return pola.test(hp);
  }

  //Request Surat Tertentu
  $('#mintaSurat').on('show.bs.modal', function(e){
    var id = $(e.relatedTarget).data('id');
    if (id==1) {
      $('.surat').html(" -- Surat Keterangan Tidak Berijazah -- ");
      $('.surat').val(id); 
    }else if(id==2){
       $('.surat').html(' -- Surat Keterangan Tidak Mampu -- ');
       $('.surat').val(id); 
    }else if(id==3){
       $('.surat').html(' -- Surat Keterangan Beda Nama -- ');
       $('.surat').val(id); 
    }else if(id==4){
       $('.surat').html(' -- Surat Keterangan Berdomisili -- ');
       $('.surat').val(id); 
    }
  });

});
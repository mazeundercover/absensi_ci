


  <!-- Absensi Modal-->
  <div class="modal fade" id="ubahAbsensiModal" tabindex="-1" role="dialog" aria-labelledby="ubahAbsensiModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ubahAbsensiModal">Ubah data Absensi</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?=BASE_URL?>/absensi/perbaruiabsensiswa" method="post">
        <div class="modal-body">
          <strong class="text-uppercase text-dark" id='formstatic-namasiswa-absensi'>NAMA SISWA</strong>
          <div class="form-group">
            <input type="text" id="idabsen-absensi" name='id_persensi' class="invisible">
            <input type="text" id="idkelas-absensi" name='id_kelas' class="invisible">
            <select name='kehadiran' class="form-control" id="statusabsen-absensi">
              <option value="H">HADIR</option>
              <option value="I">IJIN</option>
              <option value="S">SAKIT</option>
              <option value="A">ALPA</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="text-white btn btn-primary">Ubah</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- TA Modal-->
  <div class="modal fade" id="ubahTAModal" tabindex="-1" role="dialog" aria-labelledby="ubahTAModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalta-stitle">Data Tahun Ajaran</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control mb-2" id="modalta-id" name="modalta_id" placeholder="ID">
            <input type="text" class="form-control mb-2" id="modalta-nama" name="modalta_name" placeholder="NAMA">
            <select name='modalta_status' class="form-control" id="modalta-status">
              <option value="A">Aktif</option>
              <option value="T">Tidak Aktif</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="text-white btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Jurusan Modal-->
  <div class="modal fade" id="ubahJurusanModal" tabindex="-1" role="dialog" aria-labelledby="ubahJurusanModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modaljur-stitle">Data Jurusan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control mb-2" id="modaljur-id" name="modaljur_id" placeholder="ID">
            <input type="text" class="form-control mb-2" id="modaljur-nama" name="modaljur_name" placeholder="NAMA">
            <select name='modaljur_status' class="form-control" id="modaljur-status">
              <option value="A">Aktif</option>
              <option value="T">Tidak Aktif</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="text-white btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Kelas Modal-->
  <div class="modal fade" id="ubahKelasModal" tabindex="-1" role="dialog" aria-labelledby="ubahKelasModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalkel-stitle">Data Kelas</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control mb-2" id="modalkel-id" name="modalkel_id" placeholder="ID">
            <input type="text" class="form-control mb-2" id="modalkel-nama" name="modalkel_name" placeholder="NAMA">
            <select name='modalkel_level' class="form-control mb-2" id="modalkel-level">
              <!-- <option value="A">Aktif</option>
              <option value="T">Tidak Aktif</option> -->
            </select>
            <select name='modalkel_jurusan' class="form-control mb-2" id="modalkel-jurusan">
              <!-- <option value="A">Aktif</option>
              <option value="T">Tidak Aktif</option> -->
            </select>
            <select name='modalkel_taangkatan' class="form-control mb-2" id="modalkel-taangkatan">
              <!-- <option value="A">Aktif</option>
              <option value="T">Tidak Aktif</option> -->
            </select>
            <select name='modalkel_status' class="form-control mb-2" id="modalkel-status">
              <option value="A">Aktif</option>
              <option value="T">Tidak Aktif</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="text-white btn btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Siswa Modal-->
  <div class="modal fade" id="ubahSiswaModal" tabindex="-1" role="dialog" aria-labelledby="ubahSiswaModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalsiswa-stitle">Data Siswa</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input class="" type="text" class="form-control mb-2" id="modalsiswa-id" name="modalsiswa_id" placeholder="ID">
            <input type="text" class="form-control mb-2" id="modalsiswa-idbaru" name="modalsiswa_idbaru" placeholder="NIS">
            <input type="text" class="form-control mb-2" id="modalsiswa-nama" name="modalsiswa_name" placeholder="NAMA">
            <select name='modalsiswa_jk' class="form-control mb-2" id="modalsiswa-jk">
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
            <select name='modalsiswa_kelas' class="form-control mb-2" id="modalsiswa-kelas">
              <option value="A">Aktif</option>
              <option value="T">Tidak Aktif</option>
            </select>
            <select name='modalsiswa_status' class="form-control mb-2" id="modalsiswa-status">
              <option value="A">Aktif</option>
              <option value="T">Tidak Aktif</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="text-white btn btn-primary btnsiswa-submit">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
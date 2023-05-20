<div class="col-sm-4">
                <div class="form-group">
                    <label>* Tanggal Lahir</label>
                    <select name="tgl_lahir" class="form-control">
                        <option selected=”selected”>==Tanggal==</option>
                        <?php
                            for ($i=1; $i <= 31; $i++) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>* Bulan</label>
                    <select name="bulan" class="form-control">
                        <option selected=”selected”>==Bulan==</option>
                        <?php
                            for ($i=1; $i <= 12; $i++) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>* Tahun</label>
                    <select name="tahun" class="form-control">
                        <option selected=”selected”>==Tahun==</option>
                        <?php
                            $now = date('Y');
                            for ($i=2001; $i <= $now; $i++) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                    </select>
                </div>
            </div>
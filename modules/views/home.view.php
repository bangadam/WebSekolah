<!-- INFORMASI TERBARU -->
            <div class="middle-panel">
                <div class="top-middle-panel">Informasi Terbaru</div>
                <div class="bottom-middle-panel">
                    <ul>
                    <?php if(count($data['artikel']) > 0) { ?>
                        <?php foreach ($data['artikel'] as $artikel) {
                         ?>
                        <li>
                            <div class="date"><?php $artikel->waktu; ?> - <?php echo date("d/m/Y", strtotime($artikel->tanggal)); ?></div>
                            <div class="title"><a href="<?php echo SITE_URL; ?>?page=artikel&&action=detail&&id=<?php echo $artikel->id_artikel; ?>"><?php echo $artikel->judul; ?></a></div>
                            <div class="text">
                                <?php echo substr($artikel->isi, 0, 250); ?>
                            </div>
                        </li>
                        <?php } ?>
                        
                <div class="link">
                    <a class="btn btn-primary" href="<?php echo SITE_URL; ?>?page=artikel">Tampilkan Semua Berita</a>
                </div>
                    <?php } else { ?>
                        <div class="alert alert-danger">
                            <strong>Tidak Ada Artikel</strong>
                        </div>
                    <?php } ?>
                    </ul>
                </div>

            </div> 
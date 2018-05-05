					<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Probabilitas</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                        
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">Kecanduan</th>
                                                        <th>Mean</th>
                                                    </tr>    
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>User</td>
                                                        <td><?=$user['user']?></td>
                                                        <td><?=number_format($user['user']/3,2,',','') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Be User</td>
                                                        <td><?=$user['beuser']?></td>
                                                        <td><?=number_format($user['beuser']/3,2,',','') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Addict</td>
                                                        <td><?=$user['addict']?></td>
                                                        <td><?=number_format($user['user']/3,2,',','') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td><?=$user['user']+$user['beuser']+$user['addict']?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="4">Faktor</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Diri, User</td>
                                                        <td><?=$user['druser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['druser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Diri, Be User</td>
                                                        <td><?=$user['drbeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['drbeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Diri, Addict</td>
                                                        <td><?=$user['draddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['draddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Faktor Ketersediaan, User</td>
                                                        <td><?=$user['fkuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['fkuser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Faktor Ketersediaan, Beuser</td>
                                                        <td><?=$user['fkbeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['fkbeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Faktor Ketersediaan, Addict</td>
                                                        <td><?=$user['fkaddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['fkaddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lingkungan, User</td>
                                                        <td><?=$user['lkuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['lkuser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lingkungan, Beuser</td>
                                                        <td><?=$user['lkbeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['lkbeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lingkungan, Addict</td>
                                                        <td><?=$user['lkaddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['lkaddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="4">Kecanduan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Ya, User</td>
                                                        <td><?=$user['yuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['yuser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ya, Be User</td>
                                                        <td><?=$user['ybeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['ybeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ya, Addict</td>
                                                        <td><?=$user['yaddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['yaddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tidak, User</td>
                                                        <td><?=$user['tuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['tuser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tidak, Beuser</td>
                                                        <td><?=$user['tbeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['tbeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tidak, Addict</td>
                                                        <td><?=$user['taddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['taddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="4">Cara Penggunaan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Dihisap, User</td>
                                                        <td><?=$user['dhuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dhuser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dihisap, Be User</td>
                                                        <td><?=$user['dhbeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dhbeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dihisap, Addict</td>
                                                        <td><?=$user['dhaddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dhaddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Disuntik, User</td>
                                                        <td><?=$user['dsuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dsuser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Disuntik, Beuser</td>
                                                        <td><?=$user['dsbeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dsbeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Disuntik, Addict</td>
                                                        <td><?=$user['dsaddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dsaddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ditelan, User</td>
                                                        <td><?=$user['dtuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dtuser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ditelan, Beuser</td>
                                                        <td><?=$user['dtbeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dtbeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ditelan, Addict</td>
                                                        <td><?=$user['dtaddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dtaddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="4">Ekonomi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>M, User</td>
                                                        <td><?=$user['muser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['muser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>M, Be User</td>
                                                        <td><?=$user['mbeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['mbeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>M, Addict</td>
                                                        <td><?=$user['maddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['maddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MA, User</td>
                                                        <td><?=$user['mauser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['mauser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MA, Beuser</td>
                                                        <td><?=$user['mabeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['mabeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MA, Addict</td>
                                                        <td><?=$user['maaddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['maaddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MK, User</td>
                                                        <td><?=$user['mkuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['mkuser']/$user['user'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MK, Beuser</td>
                                                        <td><?=$user['mkbeuser']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['mkbeuser']/$user['beuser'],2,',','')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>MK, Addict</td>
                                                        <td><?=$user['mkaddict']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['mkaddict']/$user['addict'],2,',','')?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="3">Assist & Dast</th>
                                                        <th>P</th>
                                                        <th>Var</th>
                                                        <th>S2</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Assist, User</td>
                                                        <td><?=$user['asuser'][0]['sum(ASSIST_PASIEN_SAMPLING)']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['asuser'][0]['sum(ASSIST_PASIEN_SAMPLING)']/$user['user'],2,',','')?></td>
                                                        <td><?=$asda['j3']?></td>
                                                        <td><?=$asda['k3']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Assist, Be User</td>
                                                        <td><?=$user['asbeuser'][0]['sum(ASSIST_PASIEN_SAMPLING)']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['asbeuser'][0]['sum(ASSIST_PASIEN_SAMPLING)']/$user['beuser'],2,',','')?></td>
                                                        <td><?=$asda['j4']?></td>
                                                        <td><?=$asda['k4']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Assist, Addict</td>
                                                        <td><?=$user['asaddict'][0]['sum(ASSIST_PASIEN_SAMPLING)']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['asaddict'][0]['sum(ASSIST_PASIEN_SAMPLING)']/$user['addict'],2,',','')?></td>
                                                        <td><?=$asda['j5']?></td>
                                                        <td><?=$asda['k5']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dast, User</td>
                                                        <td><?=$user['dauser'][0]['sum(DAST_PASIEN_SAMPLING)']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dauser'][0]['sum(DAST_PASIEN_SAMPLING)']/$user['user'],2,',','')?></td>
                                                        <td><?=$asda['j7']?></td>
                                                        <td><?=$asda['k7']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dast, Beuser</td>
                                                        <td><?=$user['dabeuser'][0]['sum(DAST_PASIEN_SAMPLING)']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['dabeuser'][0]['sum(DAST_PASIEN_SAMPLING)']/$user['beuser'],2,',','')?></td>
                                                        <td><?=$asda['j8']?></td>
                                                        <td><?=$asda['k8']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dast, Addict</td>
                                                        <td><?=$user['daaddict'][0]['sum(DAST_PASIEN_SAMPLING)']?></td>
                                                        <td></td>
                                                        <td><?=number_format($user['daaddict'][0]['sum(DAST_PASIEN_SAMPLING)']/$user['addict'],2,',','')?></td>
                                                        <td><?=$asda['j9']?></td>
                                                        <td><?=$asda['k9']?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
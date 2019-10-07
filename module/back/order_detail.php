    				<?php 
						if(isset($_GET['iduser']))
						{
							$iduser=$_GET['iduser'];
						}
						if(isset($_GET['idorder']))
						{
							$idorder=$_GET['idorder'];
						}
						$total=0;
						$qr="select * from `lk_user` where `id`={$iduser}";
						$s=mysqli_query($link,$qr);
						$rs=mysqli_fetch_assoc($s);
						?>
                    <div class="row">
                        <table class="table table-borderless">
                            <tr>
                                <td>
                                    Khách Hàng:
                                </td>
                                <td>
                                    <b><?=$rs['name']?></b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    SDT:
                                </td>
                                <td>
                                    <b><?=$rs['phone']?></b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email:
                                </td>
                                <td>
                                    <b><?=$rs['mail']?></b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tên công ty:
                                </td>
                                <td>
                                   <b><?=$rs['company']?></b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Các dịch vụ đăng ký:
                                </td>
                                <td>
                                 <?php 
								$a="select * from `lk_order` where `id_user`={$iduser}";
								$b=mysqli_query($link,$a);
								$ser=mysqli_fetch_assoc($b);
								$idorder=$ser['id'];
								$a1="select * from `lk_detail_order` where `id_order`={$idorder}";
								$b1=mysqli_query($link,$a1);
								
								?>
                                    <ul class="list-unstyled" style="font-weight: bold">
                                    <?php 
										while($result=mysqli_fetch_assoc($b1)){
										$idser=$result['id_eservice'];
										$a2="select * from `lk_detail_eservice` where id={$idser}";
										
										$b2=mysqli_query($link,$a2);
										$q=mysqli_fetch_assoc($b2);
										$total=$total + $q['price'];
										
									?>
                                        <li> <?=$q['name']?> - <?=$q['price']?>VND</li>
                                 	<?php 
									}
									?>
                                        
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tổng tiền:
                                </td>
                                <td>
                                    <b>
                                        <?=$total?> VND
                                    </b>
                                </td>
                            </tr>
                        </table>
                        </div>
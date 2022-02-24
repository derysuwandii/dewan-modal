<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Modal - www.dewankomputer.com</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
</head>
<body>
	<!-- Image and text -->
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container">
		<h2 align="center" style="margin: 30px;">Bootstrap Modal HTML</h2>
		<hr>
		<div class="row" style="margin-bottom: 30px;">
			<div class="col-sm-2">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltanpaanimasi"> 
					Modal Tanpa Animasi Fade
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalfade">
					Modal Animasi Fade
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkecil">
					Modal Ukuran Kecil
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modallarge">
					Modal Ukuran Besar
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalxl">
					Modal Ukuran Super Besar
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalscrollable">
					Modal Dapat di Scroll
				</button>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-2">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBackdropTrue" data-backdrop="true">
					Modal Data Backdrop (true)
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBackdropFalse" data-backdrop="false">
					Modal Data Backdrop (false)
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBackdropStatic" data-backdrop="static">
					Modal Data Backdrop (static)
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" id="buttonjavascript" class="btn btn-primary"> 
					Modal Tampil &amp; Tutup Javascript
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" id="buttonBackdropStatic" class="btn btn-primary"> 
					Modal Backdrop Static Javascript
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" title="Tampil tada, Tutup rollOut" class="btn btn-primary" data-toggle="modal" data-target="#modalanimate"> 
					Modal Bootsrap + Animate.css
				</button>
			</div>
		</div>
		<hr>

		<!-- DEMO ANIMATE.CSS -->
		<h3 align="center" style="margin: 30px;">Demo Animate.css</h3>
		<div align="center">
			<div class="row">
				<div class="col-sm-1 offset-sm-2">
					<label>Tampil</label>
				</div>
				<div class="col-sm-2">
			      	<select class="form-control" id="entrance">
						<optgroup label="Attention Seekers">
							<option value="bounce">bounce</option>
							<option value="flash">flash</option>
							<option value="pulse">pulse</option>
							<option value="rubberBand">rubberBand</option>
							<option value="shake">shake</option>
							<option value="swing">swing</option>
							<option value="tada">tada</option>
							<option value="wobble">wobble</option>
							<option value="jello">jello</option>
						</optgroup>
						<optgroup label="Bouncing Entrances">
							<option value="bounceIn" selected>bounceIn</option>
							<option value="bounceInDown">bounceInDown</option>
							<option value="bounceInLeft">bounceInLeft</option>
							<option value="bounceInRight">bounceInRight</option>
							<option value="bounceInUp">bounceInUp</option>
						</optgroup>
						<optgroup label="Fading Entrances">
							<option value="fadeIn">fadeIn</option>
							<option value="fadeInDown">fadeInDown</option>
							<option value="fadeInDownBig">fadeInDownBig</option>
							<option value="fadeInLeft">fadeInLeft</option>
							<option value="fadeInLeftBig">fadeInLeftBig</option>
							<option value="fadeInRight">fadeInRight</option>
							<option value="fadeInRightBig">fadeInRightBig</option>
							<option value="fadeInUp">fadeInUp</option>
							<option value="fadeInUpBig">fadeInUpBig</option>
						</optgroup>
						<optgroup label="Flippers">
							<option value="flipInX">flipInX</option>
							<option value="flipInY">flipInY</option>
						</optgroup>
						<optgroup label="Lightspeed">
							<option value="lightSpeedIn">lightSpeedIn</option>
						</optgroup>
						<optgroup label="Rotating Entrances">
							<option value="rotateIn">rotateIn</option>
							<option value="rotateInDownLeft">rotateInDownLeft</option>
							<option value="rotateInDownRight">rotateInDownRight</option>
							<option value="rotateInUpLeft">rotateInUpLeft</option>
							<option value="rotateInUpRight">rotateInUpRight</option>
						</optgroup>
						<optgroup label="Sliding Entrances">
							<option value="slideInUp">slideInUp</option>
							<option value="slideInDown">slideInDown</option>
							<option value="slideInLeft">slideInLeft</option>
							<option value="slideInRight">slideInRight</option>
						</optgroup>
						<optgroup label="Zoom Entrances">
							<option value="zoomIn">zoomIn</option>
							<option value="zoomInDown">zoomInDown</option>
							<option value="zoomInLeft">zoomInLeft</option>
							<option value="zoomInRight">zoomInRight</option>
							<option value="zoomInUp">zoomInUp</option>
						</optgroup>
				        <optgroup label="Specials">
				        	<option value="rollIn">rollIn</option>
				        </optgroup>
			      	</select>
				</div>
				<div class="col-sm-1">
					<label>Tutup</label>
				</div>
				<div class="col-sm-2">
			    	<select class="form-control" id="exit">
				        <optgroup label="Attention Seekers">
							<option value="bounce">bounce</option>
							<option value="flash">flash</option>
							<option value="pulse">pulse</option>
							<option value="rubberBand">rubberBand</option>
							<option value="shake">shake</option>
							<option value="swing">swing</option>
							<option value="tada">tada</option>
							<option value="wobble">wobble</option>
							<option value="jello">jello</option>
				        </optgroup>
				        <optgroup label="Bouncing Exits">
							<option value="bounceOut">bounceOut</option>
							<option value="bounceOutDown">bounceOutDown</option>
							<option value="bounceOutLeft">bounceOutLeft</option>
							<option value="bounceOutRight">bounceOutRight</option>
							<option value="bounceOutUp">bounceOutUp</option>
				        </optgroup>
				        <optgroup label="Fading Exits">
							<option value="fadeOut">fadeOut</option>
							<option value="fadeOutDown">fadeOutDown</option>
							<option value="fadeOutDownBig">fadeOutDownBig</option>
							<option value="fadeOutLeft">fadeOutLeft</option>
							<option value="fadeOutLeftBig">fadeOutLeftBig</option>
							<option value="fadeOutRight">fadeOutRight</option>
							<option value="fadeOutRightBig">fadeOutRightBig</option>
							<option value="fadeOutUp">fadeOutUp</option>
							<option value="fadeOutUpBig">fadeOutUpBig</option>
				        </optgroup>
				        <optgroup label="Flippers">
							<option value="flipOutX" selected>flipOutX</option>
							<option value="flipOutY">flipOutY</option>
				        </optgroup>
				        <optgroup label="Lightspeed">
							<option value="lightSpeedOut">lightSpeedOut</option>
				        </optgroup>
				        <optgroup label="Rotating Exits">
							<option value="rotateOut">rotateOut</option>
							<option value="rotateOutDownLeft">rotateOutDownLeft</option>
							<option value="rotateOutDownRight">rotateOutDownRight</option>
							<option value="rotateOutUpLeft">rotateOutUpLeft</option>
							<option value="rotateOutUpRight">rotateOutUpRight</option>
				        </optgroup>
				        <optgroup label="Sliding Exits">
							<option value="slideOutUp">slideOutUp</option>
							<option value="slideOutDown">slideOutDown</option>
							<option value="slideOutLeft">slideOutLeft</option>
							<option value="slideOutRight">slideOutRight</option>
				        </optgroup>        
				        <optgroup label="Zoom Exits">
							<option value="zoomOut">zoomOut</option>
							<option value="zoomOutDown">zoomOutDown</option>
							<option value="zoomOutLeft">zoomOutLeft</option>
							<option value="zoomOutRight">zoomOutRight</option>
							<option value="zoomOutUp">zoomOutUp</option>
				        </optgroup>
				        <optgroup label="Specials">
				          <option value="rollOut">rollOut</option>
				        </optgroup>
			    	</select>
				</div>
				<div class="col-sm-2" valign="bottom">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDemoAnimate">
					  Tampilkan Modal
					</button>
				</div>
			</div>
		</div>
		<hr>

		<!-- MODAL TANPA ANIMASI FADE -->
        <div class="modal" id="modaltanpaanimasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Standar</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal standar
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END TANPA ANIMASI FADE -->

        <!-- MODAL MODAL BACKDROP STATIC -->
        <div class="modal fade" id="modalBackdropStatic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Backdrop Static</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal Backdrop Static
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL BACKDROP STATIC -->

        <!-- MODAL MODAL BACKDROP FALSE -->
        <div class="modal fade" id="modalBackdropFalse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Backdrop False</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal Backdrop False
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL BACKDROP FALSE -->

        <!-- MODAL MODAL BACKDROP TRUE -->
        <div class="modal fade" id="modalBackdropTrue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Backdrop True</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal Backdrop True
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL BACKDROP TRUE -->

		<!-- MODAL ANIMASI FADE -->
        <div class="modal fade" id="modalfade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Animasi Fade</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal animasi fade
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END ANIMASI FADE -->

        <!-- MODAL KECIL -->
        <div class="modal fade" id="modalkecil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Kecil</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal kecil
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL KECIL -->

        <!-- MODAL LARGE -->
        <div class="modal fade" id="modallarge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Large</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal large
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- LARGE -->

        <!-- MODAL EXTRA LARGE -->
        <div class="modal fade" id="modalxl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Extra Large</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal extra large
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END EXTRA LARGE -->

        <!-- MODAL SCROLLABLE -->
        <div class="modal fade" id="modalscrollable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Scrollable</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal scrollable
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END SCROLLABLE -->

        <!-- MODAL JAVASCRIPT -->
        <div class="modal fade" id="modaljavascript" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Javascript</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal tampil dan tutup dengan javascript.
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" id="closemodal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END JAVASCRIPT -->

        <!-- MODAL JAVASCRIPT -->
        <div class="modal fade" id="modalBackdropJavascript" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Javascript</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal tampil dan tutup dengan javascript.
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" id="closeModalBackdrop">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END JAVASCRIPT -->

        <!-- MODAL BOOTSRAP + ANIMATE.CSS -->
        <div class="modal fade" id="modalanimate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Bootstrap + Animate</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal Modal + Animate.css dengan animasi muncul <b>tada</b> dan tutup <b>rollOut</b>.
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END BOOTSRAP + ANIMATE.CSS -->

        <!-- MODAL BOOTSRAP + ANIMATE.CSS -->
        <div class="modal fade" id="modalDemoAnimate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                	<!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Modal Bootstrap + Animate Demo</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                    	Ini Adalah isi dari modal Modal + Animate.css Demo.
               		</div>
               		<!-- Modal footer -->
				    <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				    </div>
                </div>
            </div>
        </div>
        <!-- END BOOTSRAP + ANIMATE.CSS -->
    </div>
    <hr>

    <iframe width="100%" height="300" src="//jsfiddle.net/dewankomputer/Lwudo3h6/2/embedded/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>

    <hr>
    <div class="text-center">© <?php echo date('Y'); ?> Copyright:
	    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
	</div>

    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.jsfiddle"></script>
	
	<!-- Modal Javascript -->
	<script type="text/javascript">
		$('#buttonjavascript').click(function() {
		    $('#modaljavascript').modal();
		});
		$('#closemodal').click(function() {
		    $('#modaljavascript').modal('hide');
		});
	</script>

	<!-- Modal Backdrop Javascript -->
	<script type="text/javascript">
		$('#buttonBackdropStatic').click(function() {
		    //$('#modalBackdropJavascript').modal({backdrop: true});
		    //$('#modalBackdropJavascript').modal({backdrop: false});
		    $('#modalBackdropJavascript').modal({backdrop: "static"});
		});
		$('#closeModalBackdrop').click(function() {
		    $('#modalBackdropJavascript').modal('hide');
		});
	</script>

	<!-- Bootstrap + Animate.css -->
	<script type="text/javascript">
		$('#modalanimate').on('show.bs.modal', function (e) {
		  	$('.modal .modal-dialog').attr('class', 'modal-dialog tada animated');
		})
		$('#modalanimate').on('hide.bs.modal', function (e) {
		  	$('.modal .modal-dialog').attr('class', 'modal-dialog rollOut animated');
		})
	</script>

	<script type="text/javascript">
		function testAnim(x) {
		    $('.modal .modal-dialog').attr('class', 'modal-dialog  ' + x + '  animated');
		};
		$('#modalDemoAnimate').on('show.bs.modal', function (e) {
		  var anim = $('#entrance').val();
		      testAnim(anim);
		})
		$('#modalDemoAnimate').on('hide.bs.modal', function (e) {
		  var anim = $('#exit').val();
		      testAnim(anim);
		})
	</script>
</body>
</html>
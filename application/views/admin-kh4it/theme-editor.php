<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
    
<%@ page import="java.util.ArrayList, model.dto.Cooperator" %>  

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<meta name="author" content="Vuthea Chheang">
		<title>Theme Editor</title>
 
		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		<link href="assets/plugins/weather-icon/css/weather-icons.min.css" rel="stylesheet">
		<link href="assets/plugins/prettify/prettify.min.css" rel="stylesheet">
		<link href="assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.theme.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.transitions.min.css" rel="stylesheet">
		<link href="assets/plugins/chosen/chosen.min.css" rel="stylesheet">
		<link href="assets/plugins/icheck/skins/all.css" rel="stylesheet">
		<link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/validator/bootstrapValidator.min.css" rel="stylesheet">
		<link href="assets/plugins/summernote/summernote.min.css" rel="stylesheet">
		<link href="assets/plugins/markdown/bootstrap-markdown.min.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/bootstrap.datatable.min.css" rel="stylesheet">
		<link href="assets/plugins/morris-chart/morris.min.css" rel="stylesheet">
		<link href="assets/plugins/c3-chart/c3.min.css" rel="stylesheet">
		<link href="assets/plugins/slider/slider.min.css" rel="stylesheet">
		
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">
 
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!--  CSS (REQUIRED ALL PAGE)-->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Code Mirror -->
		<link rel="stylesheet" href="assets/codemirror/lib/codemirror.css">
		<link rel="stylesheet" href="assets/codemirror/style.css">
		<link rel="stylesheet" href="assets/codemirror/addon/display/fullscreen.css">
		<link rel="stylesheet" href="assets/codemirror/theme/eclipse.css">
		<script src="assets/codemirror/lib/codemirror.js"></script>
		<script src="assets/codemirror/mode/xml/xml.js"></script>
		<script src="assets/codemirror/addon/display/fullscreen.js"></script>
		<script src="assets/codemirror/addon/edit/closetag.js"></script>
		<script src="assets/codemirror/addon/fold/xml-fold.js"></script>
		<script src="assets/codemirror/mode/javascript/javascript.js"></script>
		<script src="assets/codemirror/mode/css/css.js"></script>
		<script src="assets/codemirror/mode/php/php.js"></script>
		<script src="assets/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<link rel="stylesheet" href="assets/codemirror/addon/dialog/dialog.css">
		<script src="assets/codemirror/addon/dialog/dialog.js"></script>
		<script src="assets/codemirror/addon/search/searchcursor.js"></script>
		<script src="assets/codemirror/addon/search/search.js"></script>
		<script src="assets/codemirror/addon/edit/matchtags.js"></script>
		
	</head>
 
	<body class="tooltips">
		
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="wrapper">
			<!-- BEGIN TOP NAV -->
			<jsp:include page="_header.jsp"></jsp:include>
			<!-- END TOP NAV -->
			
			
			
			<!-- BEGIN SIDEBAR LEFT -->
			<jsp:include page="_sidebar.jsp"></jsp:include>
			<!-- END SIDEBAR LEFT -->
			
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				
				
				<div class="container-fluid">
					<div id="getContent">
					<br/>
					<div class="panel panel-info">
								  <div class="panel-heading">
									<h1 class="panel-title">
									<i class="fa fa-tasks"></i>
										<a href="index.act"  >
										Theme-Editor
										
										</a>
									</h1>
								  </div>
									
					</div><!-- /.panel panel-default -->
					
					
					<div class="the-box no-border">
						<form role="form" action="theme-save.act?filename=<%= request.getAttribute("filepath") %>" method="post">
							<div class="row">
								<div class="col-sm-10">
									<div class="form-group">
										<label id="title-editor"><%= request.getAttribute("filepath") %></label>
									</div>
									<div class="form-group">
										<textarea id="code" name="code">
											<%= request.getAttribute("readfile") %>
    									</textarea>
    									
									</div>
									<div class="form-group">
										<%-- <button class="btn btn-success" onclick="parent.location='theme-save.hrd?filename=<%= request.getAttribute("filepath") %> &textbody=<%= request.getAttribute("readfile") %>'">Update File</button> --%>
										<input class="btn btn-success" type="submit" value="Update File"/>
									</div>
								</div><!-- /.col-sm-8 -->
								<div class="col-sm-2">
										<label>Template Page</label>					
										<p><a href="theme_editor.act?filename=/view/_footer.jsp">_footer.jsp</a></p>														
										<p><a href="theme_editor.act?filename=/view/_header.jsp">_header.jsp</a></p>															
										<p><a href="theme_editor.act?filename=/view/_search.jsp">_search.jsp</a></p>														
										<p><a href="theme_editor.act?filename=/view/_sidebarleft.jsp">_sidebarleft.jsp</a></p>								
										<p><a href="theme_editor.act?filename=/view/aboutus.jsp">aboutus.jsp</a></p>
										<p><a href="theme_editor.act?filename=/view/bizconsulting.jsp">bizconsulting.jsp</a></p>
										<p><a href="theme_editor.act?filename=/view/employerrequest.jsp">employerrequest.jsp</a></p>
										<p><a href="theme_editor.act?filename=/view/hrconsulting.jsp">hrconsulting.jsp</a></p>
										<p><a href="theme_editor.act?filename=/view/hrrecruitment.jsp">hrrecruitment.jsp</a></p>
										<p><a href="theme_editor.act?filename=/view/jobsingle.jsp">jobsingle.jsp</a></p>
										<p><a href="theme_editor.act?filename=/view/singlepost.jsp">singlepost.jsp</a></p>
										<p><a href="theme_editor.act?filename=/view/teamdetail.jsp">teamdetail.jsp</a></p>
										
										<p><a href="theme_editor.act?filename=view/css/style.css">StyleSheet.CSS</a></p>
										
								</div><!-- /.col-sm-4 -->
							</div><!-- /.row -->
						</form>
					</div><!-- /.the-box no-border -->
					
					
					
				
			</div>
				
				</div><!-- /.container-fluid -->
				
				
				
				<!-- BEGIN FOOTER -->
				<jsp:include page="_footer.jsp"></jsp:include>
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		
		
	
		
		
		
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
		
		<!--
		===========================================================
		Placed at the end of the document so the pages load faster
		===========================================================
		-->
		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/retina/retina.min.js"></script>
		<script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
 
		<!-- PLUGINS -->
		<script src="assets/plugins/skycons/skycons.js"></script>
		<script src="assets/plugins/prettify/prettify.js"></script>
		<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
		<script src="assets/plugins/icheck/icheck.min.js"></script>
		<script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
		<script src="assets/plugins/mask/jquery.mask.min.js"></script>
		<script src="assets/plugins/validator/bootstrapValidator.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/bootstrap.datatable.js"></script>
		<script src="assets/plugins/summernote/summernote.min.js"></script>
		<script src="assets/plugins/markdown/markdown.js"></script>
		<script src="assets/plugins/markdown/to-markdown.js"></script>
		<script src="assets/plugins/markdown/bootstrap-markdown.js"></script>
		<script src="assets/plugins/slider/bootstrap-slider.js"></script>
		
		<!-- EASY PIE CHART JS -->
		<script src="assets/plugins/easypie-chart/easypiechart.min.js"></script>
		<script src="assets/plugins/easypie-chart/jquery.easypiechart.min.js"></script>
		
		<!-- KNOB JS -->
		<!--[if IE]>
		<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
		<![endif]-->
		<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
		<script src="assets/plugins/jquery-knob/knob.js"></script>

		<!-- FLOT CHART JS -->
		<script src="assets/plugins/flot-chart/jquery.flot.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.tooltip.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>

		<!-- MORRIS JS -->
		<script src="assets/plugins/morris-chart/raphael.min.js"></script>
		<script src="assets/plugins/morris-chart/morris.min.js"></script>
		
		<!-- C3 JS -->
		<script src="assets/plugins/c3-chart/d3.v3.min.js" charset="utf-8"></script>
		<script src="assets/plugins/c3-chart/c3.min.js"></script>
		
		
		<script src="assets/plugins/validator/example.js"></script>
		<script src="assets/js/myvalidator.js"></script>
		
		<!-- MAIN APPS JS -->
		<script src="assets/js/apps.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.js" ></script>
		<script src="http://malsup.github.com/jquery.form.js" ></script>
		<script src="js/fileUploadScript.js" ></script>
	
		<script>
		    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
		      lineNumbers: true,
		      theme: "eclipse",
		      autoCloseTags: true,
		      matchBrackets: true,
		      mode: "application/x-httpd-php",
		      indentUnit: 4,
		      indentWithTabs: true,
		      matchTags: {bothTags: true},
		      extraKeys: {"Ctrl-J": "toMatchingTag"},
		      extraKeys: {
		        "F11": function(cm) {
		          cm.setOption("fullScreen", !cm.getOption("fullScreen"));
		        },
		        "Esc": function(cm) {
		          if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
		        }
		      }
		    });
		  </script>
		
	</body>
</html>
<%@page import="java.lang.reflect.Type"%>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="utf-8"%>
<%@ page import="java.util.ArrayList, model.dto.Job" %>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
		<meta name="author" content="Vuthea Chheang">
		<title>Add Job</title>
 
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
		
	</head>
 
	<body class="tooltips">
		
		<% 
		Job job=null;
	 	if(request.getAttribute("job")!=null){
	 		job = (Job)request.getAttribute("job");
	 	}%>
	 	 
		
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
					
				<br/>				
					<div class="panel panel-primary">
							  <div class="panel-heading">
								<h3 class="panel-title" id="formtitle">Form Add Job </h3>
							  </div>
							  <div class="panel-body">
					
					
					<div class="row">
					
					<div class="col-sm-12">
					
					<div>
						<form id="frmjob" name="frmjob" method="post" action="addjob_pro.act" class="form-horizontal" role="form">
							<fieldset>
								<input type="hidden" class="form-control" name="txtjobid" id="txtjobid" value="" />
								<div class="form-group">
									<label class="col-lg-2 control-label">Position<span class="required">*</span></label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="txtposition" id="txtposition" value="" />
									</div>
								</div> 
								<div class="form-group">
									<label class="col-lg-2 control-label">Salary Range:<span class="required">*</span></label>
									<div class="col-lg-2">
										<input type="text" class="form-control" name="txtlowsalary" id="txtlowsalary" value="" />
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" name="txthighsalary" id="txthighsalary" value="" />
									</div>
								</div> 
								<div class="form-group">
									<label class="col-lg-2 control-label">Company<span class="required">*</span></label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="txtcompany" id="txtcompany" value="" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Short Description<span class="required">*</span></label>
									<div class="col-lg-10">
										<textarea class="form-control" name="txtshortdescription" id="txtshortdescription"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Location<span class="required">*</span></label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="txtlocation" id="txtlocation" value="" />
									</div>
								</div> 
								<div class="form-group">
									<label class="col-lg-2 control-label">Description<span class="required">*</span></label>
									<div class="col-lg-10">
										<textarea class="form-control summernote-lg" name="txtdescription" id="txtdescription"><% if(request.getAttribute("job")!=null){out.print(job.getDescription()); }else{out.print("");}%></textarea>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-2 control-label">Issue Date<span class="required">*</span></label>
									<div class="col-lg-4">
										<input type="text" id="txtissuedate" name="txtissuedate" placeholder="yyyy-mm-dd" data-date-format="yyyy-mm-dd" class="form-control datepicker">
									</div>
									
									<label class="col-lg-2 control-label">Expire Date<span class="required">*</span></label>
									<div class="col-lg-4">
										<input type="text" id="txtexpireddate" name="txtexpireddate" placeholder="yyyy-mm-dd" data-date-format="yyyy-mm-dd" class="form-control datepicker">
									</div>
								</div> 
								
								
							
							
							</fieldset>

							<div class="form-group">
							
								<div class="col-lg-9 col-lg-offset-3">
									
									<input type="submit" id="btnsave" class="btn btn-info" value="Save"/>
								</div>
							</div>
							
						</form>
					</div><!-- /.the-box -->
						
					</div><!-- /.col-sm-8 -->
						
				
					</div><!-- /.row -->
					</div>
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
		
		<%if(request.getAttribute("job")!=null){ %>
			<script>
			document.getElementById("formtitle").innerHTML = "Update Job Information";
			document.frmjob.action = "updatejob.act";
			document.getElementById("txtjobid").value = "<%= job.getJobid() %>";
			document.getElementById("txtposition").value = "<%= job.getPosition() %>";
			document.getElementById("txtcompany").value = "<%= job.getCompany() %>";
			document.getElementById("txtlocation").value = "<%= job.getLocation() %>";
			<%-- document.getElementById("txtdescription").innerHTML = '<%= job.getDescription() %>'; --%>
			document.getElementById("txtshortdescription").innerHTML = '<%= job.getShortdescription() %>';
			document.getElementById("txtissuedate").value = "<%= job.getIssuedate() %>";
			document.getElementById("txtexpireddate").value = "<%= job.getExpireddate() %>";
			document.getElementById("txtlowsalary").value = "<%= job.getLowsalary() %>";
			document.getElementById("txthighsalary").value = "<%= job.getHighsalary() %>";
			</script>
		<%} %>
	 	
	
	
	
	</body>
</html>

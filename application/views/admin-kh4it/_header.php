<%@page import="model.dto.User"%>
<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="UTF-8"%>

 <%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %> 

	<%if(request.getSession().getAttribute("thelookinguser")==null){%>
	<script>
		window.location.href="index.act";
	</script>
	<% }%>
	<% 
	
	User usr = (User) session.getAttribute("thelookinguser");	
	
	%>

<script src="assets/js/jquery.min.js"></script>
<style>
			.required{
				color: red;
			}

#mysearch{
	width:55%;
}
#txtsearch{
	width:110%;
}

#frmg{
	width: 80%;
}

@media (min-width: 1030px) and (max-width: 1600px) {
	#txtsearch{
		width: 110%;
	}
}

@media (max-width: 930px) {
	
	.ulflag{
		display: none;	
	}
}
@media (min-width: 920px) and (max-width:  1030px) {
	#txtsearch{
		width:220%;
	}
	.ulflag{
		display: none;	
	}
}
@media (min-width: 801px) and (max-width:  920px) {
	#txtsearch{
		width:160%;
	}
}



@media (min-width: 1255px) and (max-width: 1415px) {
	#mysearch{
		width:30%;
	}
}
@media (min-width: 1230px) and (max-width: 1255px) {
	#mysearch{ 
 		width:50%; 
	} 
 } 
 @media (min-width: 801px) and (max-width: 1230px) {
	#mysearch{ 
 		width:25%; 
	} 
	#txtsearch {
	 width: 122%;
	}
	 #frmg{
		width: 60%;
	}
 } 

 @media (max-width: 800px) {
	#mysearch{ 
 		width:100%;
	} 
	#txtsearch {
	 width: 100%;
	}
	 #frmg{
		width: 100%;
	}
	#bts{
	position: absolute;
	top: 13px;
	right: 33px;
	}
 } 

 @media (max-width: 767px) {
	#bts{
	top: 15px;
	}
 } 
 
 @media (max-width: 973px) {
	#mysearch{ 
 		display:none;
	} 
 } 

/* @media (min-width: 1030px) and (max-width: 1415px) { */
/* 	#mysearch{ */
/* 		width:60%; */
/* 	} */
/* } */
#mynav li a{
	color: #fff;
}


</style>


	
	
<div class="top-navbar">
				<div class="top-navbar-inner">
					
					<!-- Begin Logo brand -->
					<div class="logo-brand">
						<a href="dashboard.jsp"><img alt="The Looking Group" src="../uploads/logo/White-Logo.jpg" height="60px" ></a>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->
					
					<div class="top-nav-content">
						
						<!-- Begin button sidebar left toggle -->
						<div class="btn-collapse-sidebar-left">
							<i class="fa fa-bars" style="color: #fff;"></i>
						</div><!-- /.btn-collapse-sidebar-left -->
						<!-- End button sidebar left toggle -->
						
						
						<!-- Begin button nav toggle -->
						<div data-target="#main-fixed-nav" data-toggle="collapse" class="btn-collapse-nav">
							<i class="fa fa-plus icon-plus" id="clickshownav"></i>
						</div><!-- /.btn-collapse-sidebar-right -->
						<!-- End button nav toggle -->
						
						
						<!-- Begin Collapse menu nav -->
						<div id="main-fixed-nav" >
							<!-- Begin nav search form -->
						<%if(session.getAttribute("thelookinguser")!=null) {%>	
							<ul class="nav-user navbar-right" id="mynav">
						 	
								<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #fff">
									
									Hi, <strong><%= usr.getUsername() %></strong>
								  </a>
								  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
								    <li ><a style="color: #333;" href="../view/index.act" target="_blank">Home</a></li>
								   
									<li ><a style="color: #333;" href="logout.act">Log out</a></li>
								  </ul>
								</li>
							</ul> 
						<%} %>
							
								<!-- End Section for not login user -->
							
							
						</div><!-- /.navbar-collapse -->
						<!-- End Collapse menu nav -->
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div>
			
		
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    

<%@ page import="java.util.*,javax.mail.*"%>
<%@ page import="javax.mail.internet.*"%>
<%@ page import="javax.activation.*" %>
       
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<%
String result;

final String to = request.getParameter("mail");
final String subject = request.getParameter("sub");
final String messg = request.getParameter("mess");

	final String from= "info@iialcourses.com";
	final String pass= "iial2019";

String host="smtp.gmail.com";

Properties props = new Properties();

	props.put("mail.smtp.host","smtpout.secureserver.net");
	props.put("mail.transport.protocol","smtps");
	props.put("mail.smtp.auth", "true");  // attempt to authenticate the user using the AUTH command
	props.put("mail.smtp.starttls.enable","true"); 
	props.put("mail.user","from");
	props.put("mail.password","pass");
	props.put("mail.smtp.port", "587");    //  gmails smtp port no


Session mailSession=Session.getInstance(props, new javax.mail.Authenticator(){
	
@Override
protected PasswordAuthentication getPasswordAuthentication(){
	return new PasswordAuthentication(from,pass);
}
});

 try{
	MimeMessage message = new MimeMessage(mailSession);
	
	message.setFrom(new InternetAddress(from));
	
	message.addRecipient(Message.RecipientType.TO,
			
	new InternetAddress(to));
	
	message.setSubject(subject);
	
	message.setText(messg);
	Transport.send(message);
	result="message send sucessfully";
	%>
	<script>
	alert("mail sent sucessfully");
	</script>
	<jsp:include page="view_registration.jsp" />
	
	<% 

 }
catch(MessagingException mex){
	mex.printStackTrace();
	result="Error:unable to send";
}
%>
</body>
</html>
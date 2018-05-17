const HTTP_PORT=8443;
var app=require('/home/andyk/node_modules/express')();
var http=require ('http').Server(app);
var io=require('/home/andyk/node_modules/socket.io')(http); 
io.on('connection',function(socket){
    console.log("new client connected");
    socket.on('disconnected',function(){
        console.log("new client disconnected");});
    
    socket.on("pesan",function(data){
        console.log(data);});
});
http.listen(HTTP_PORT,function(){
    console.log('Listening on port'+HTTP_PORT);
});

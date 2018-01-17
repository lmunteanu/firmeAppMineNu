//function ajaxRequest(setup: Object, succes: Function, error: Function);
var ajaxRequest = function(obj, succes, errors) {
   console.log(obj);
   var url, type;
   if (obj.data != null) {
      var oData, oPage, oAction, oA, oB, oUser, oPasswd;
      oData = obj.data;
      oPage = oData.page; //should be "ajax"
      oAction = oData.action;
      oA = oData.a;
      oB = oData.b;
      oUser = oData.user;
      oPasswd = oData.pass;
   }
//   var succes = s;
//   var errors = e;
   type = obj.type ? 'POST' : 'GET';

   if (type === 'GET' && !oData) {
      console.log('case 1', obj);
      url = obj.url;
   }
   if (type === 'GET' && oData) {
      console.log("GET and oData ")
      if ((!oPage && !oAction) && (oA && oB)) {
         console.log('case 2', obj);
         url = obj.url + '&a=' + oA + '&b=' + oB;
      }
      if (oPage && oAction && oA && oB) {
         console.log('case 3', obj);
         url = obj.url + '?page=' + oPage + '&action=' + oAction + '&a=' + oA + '&b=' + oB;
      }
      if (oPage && oAction && oData.aId) {
         console.log('case 4', obj);
         url = obj.url + '?page=' + oPage + '&action=' + oAction + '&articleId=' + oData.aId;
      }
   }
   else {
      console.log('case 5', obj);
      url = obj.url;
   }

   console.log(url);
   var httpRequest = new XMLHttpRequest();

   httpRequest.onreadystatechange = function(event) {
      // La readyState = 4 si status = 200 s-a primit raspuns de la server si s-a
      // finalizat request-ul.
      if (this.readyState === 4 && this.status === 200) {

         //console.log('Raspuns de la server:', this.response);

         if (this.response.success) {
            //console.log('Totul a fost OK pe server');
            succes(this.response.data);
         }
         else {
            errors(this.response);
         }
      }
      if (this.readyState === 4 && this.status === 404) {
         errors('wrong action name');
         return 0;
      }
   };
   httpRequest.responseType = 'json';
   httpRequest.open(type, url);
   console.log('type: ', type, ' and url: ', url);
   if (type === 'GET') {
      httpRequest.send();
   }
   else {
      // console.log("this is post");
      httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      httpRequest.send('data=' + JSON.stringify({
         param1: oUser,
         param2: oPasswd
      }));
   }
};
//console.log('imediat dupa request');

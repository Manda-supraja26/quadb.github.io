// $(document).ready(function(){
//     var timer;
//     var timeout =5000;//time out duration
//     $('#notes_desc').keyup(function(){
//         if(timer){
//             clearTimeout(timer);
//         }
//         timer = setTimeOut(saveData,timeout)
//     });
//     $('#submit').click(function(){
//         saveData();
//     });
// });
// function saveData(){
//     var notes_desc =$('#notes_desc').val();
//     if(notes_desc !=''){
//         $.jax({
//             url: 'note.php',
//             type: 'post',
//             data: { notes_desc :notes_desc}
//             success: function(response){
//                 $('#notes_desc').val(response)
//             }

//         });
//     }
// }

// function validation()
// {
//     var email=document.getElementById('mail').value;
//     var emailcheck=/^[A-Za-z_0-9.]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
//     if (emailcheck.test(mail)) 
// 		{
// 			document.getElementById('erroremail').innerHTML="";
// 		}
// 		else
// 		{
// 			document.getElementById('erroremail').innerHTML="**invalid email";
// 			return false;
// 		}

// }
	
// 	const scriptURL = 'index.php'
//     const form = document.forms['google-sheet']
          
//             form.addEventListener('submit', e => {
//               e.preventDefault()
//               fetch(scriptURL, { method: 'POST', body: new FormData(form)})
//                 .then(response => ))
//                 .catch(error => console.error('Error!', error.message))
//             })
	
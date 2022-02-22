// $(document).ready(function () {
//     $("#btn").click(function () {
//         alert("btn");
//         $.ajax({
//             type: 'post',
//             url: "",
//             success(){
//                 alert("a")
//             }
//         });
//     })
// })

// function addComment(article_id){
//     var commentBody = $('#commentBody').val(); //Получаем текст комментария
//     var btn = $('#addComment');
//     $.ajax({
//         type: 'post',
//         url: "/comments/json/addajax.json",
//         data: {body: commentBody, article_id: article_id},
//         beforeSend: function(xhr) {
//             xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//         },
//         success: function(data){
//             if(data.rezult) { //Проверяем вспомогательную переменную
//                 alert(data.rezult); //Выводим сообщение об успешном сохранении комментария
//                 $('.related').html(data.comments); //обновляем комментарии в блоке div с классом related
//                 $('#myModal').modal('hide'); //Закрываем модальное окно
//                 $('#commentBody').val(''); //Очищаем поле ввода в модальном окне
//             }
//             else alert('Не удалось сохранить комментарий, попробуйте выполнить операцию позже');
//         },
//         error: function(e) {
//             alert("Произошла ошибка запроса к серверу, попробуйте выполнить операцию позже или обновить страницу");
//             console.log(e); //Выводим ошибки, если есть, в консоль
//         }
//     })
//     return false;
// }

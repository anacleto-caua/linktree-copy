/**
 * This script add new elements to a div.
 * 
 * Author: Cauã Anacleto
 * Date: 01/11/2021
 * Email: anacleto.for.work@gmail.com
 * GitHub: https://github.com/anacleto-caua
 * 
 */

//Vars
var ids = [];

//Functions
function delElement(target_id){
    
    for(let i = 0; i < ids.length; i++) {
        if(ids[i] == target_id){
            ids.splice(i, 1);
            break;
        }
    }
    
}

function rewriteIds(){
    document.getElementById('hidden-ids').value = ids.toString();
}

//Main
const add_input = document.getElementById('add-link');

add_input.addEventListener('click', function (){

    var entrance = document.getElementById('links-entry');
    var child = document.createElement('div'); 

   //next available id 
    let id = parseInt(ids[ids.length-1]) + 1;
    if(isNaN(id)){
        id = 0;
    }

    ids.push(id);

    child.id = `div-n-${id}`;
    child.className = 'mt-2 mb-1 pb-3 border-b';
    child.innerHTML =
    `<label for="name-${id}" class="inline-block font-medium text-sm text-gray-700 w-2/5 float-left">
        Name
    </label>

    <label for="link-${id}" class="inline-block font-medium text-sm text-gray-700 w-2/5 float-left">
        Link
    </label>

    <label class="inline-block font-medium text-sm text-gray-700 w-1/5 float-right">
        Remove
    </label>
    
    <input id="name-${id}"
        name="name-${id}"
        type="text"
        class="float-left inline-block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mt-2 mb-3 mx-auto w-2/5"/>

    <input id="link-${id}"
        name="link-${id}"
        type="text"
        class="float-left inline-block rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mt-2 mb-3 mx-auto w-2/5"/>
    
    <button class="px-4 py-3 mt-2 mb-3 border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none disabled:opacity-25 transition ease-in-out duration-150 bg-red-700 w-1/5" type="button" id="${id}">
        Remove
    </button>`;

    let button = child.querySelector("button");
    button.addEventListener('click', function(){
        document.getElementById(`div-n-${button.id}`).remove();
        delElement(parseInt(button.id));
        rewriteIds();
    })

    entrance.appendChild(child);
    rewriteIds();

});

const jsTableElement=document.getElementById("js-datatable");let jstable=new JSTable(jsTableElement,{sortable:!1,searchable:!1,perPageSelect:!1,perPage:jsTableElement.getAttribute("data-limit")??10,labels:{noRows:jsTableElement.getAttribute("data-empty"),info:"{start} - {end} From {rows}",loading:"Loading...",infoFiltered:"{start} - {end} From {rows}"},serverSide:!0,ajax:jsTableElement.getAttribute("data-url"),ajaxParams:Object.fromEntries(queryParams().entries())});const page=queryParams().get("page");function queryParams(){return new URLSearchParams(window.location.search)}page&&jstable&&setTimeout((()=>{jstable.paginate(Number(page))}),550),document.querySelectorAll(".header-datatable .input-search input").forEach((e=>{e.addEventListener("keypress",(function(t){if("Enter"===t.key){if("URLSearchParams"in window){var a=queryParams();a.set("search",e.value),a.set("page",1),window.history.replaceState(null,null,`?${a.toString()}`),setParamExport()}jstable.config.ajaxParams={search:e.value},jstable.search(e.value),jstable.paginate(1)}}))})),jstable.on("update",(function(){setTimeout((()=>{document.querySelectorAll('[data-toggle="confirmation"]').forEach((e=>{e.addEventListener("click",(function(){Confirmation(e.getAttribute("data-message"),e.getAttribute("data-action"),e.getAttribute("data-method")||"POST")}))})),document.getElementById("input_checkall_datatable")?.addEventListener("change",(function(){document.querySelectorAll(".datatable .table-checkbox").forEach((e=>{e.checked=this.checked})),tableCeklistHandling()})),document.querySelectorAll(".datatable .table-checkbox").forEach((e=>{e.addEventListener("click",(function(){tableCeklistHandling()}))}))}),1e3),document.querySelector("#js-table tbody tr .dt-message")?jsTableElement.classList.remove("table-has-data"):jsTableElement.classList.add("table-has-data")}));
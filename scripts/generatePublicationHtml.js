function generatePublicationHtml (publicationList, serialNumber){
    let publicationHtml= "";

    let isFound = false;
    
    // let publications = JSON.parse(publicationList)
    let publications = publicationList


    for (let i = 0; i < publications.length; i++) {
        if (publications[i].serialNumber === serialNumber && serialNumber !== undefined) {
            publicationHtml = `<div><header><div class="article-header"><h2> ${publications[i].articleTitle} </h2>
            </div></header>

            <div class="pub-details">
            <div class="detail-text"><strong>Authors: </strong><span class="light">${publications[i].authors}</span>
            </div>

            <div class="detail-text"><strong>School: </strong><span class="light">Keele University</span>
            </div>
            </div>

            <div class="pub-details">

            <div class="detail-text"><strong>Year Published: </strong><span class="light">${publications[i].yearOfPublication}</span>
            </div>

            <div class="detail-text"><strong> DOI Number: </strong> <span class="light">${publications[i].DOI}</span>
            </div>

            </div>
            
            <div><article class="text"><div class="abstract-header">Abstract</div><p class="abstract-text"> <span class="abstract-text">${publications[i].Abstract}</span></p></article></div><div><section>`

            isFound = true;

        }
    }

    if (publicationHtml.length <= 0) {
        publicationHtml = "<div class='not-found'>No Such Publication</div>"
    }

    return publicationHtml;
}
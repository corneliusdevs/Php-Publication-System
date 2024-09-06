function getPublicationsListHtml (publicationsList){
    let publicationListHtml = "";
    let publicationsListCopy = [...publicationsList]
    let data = [...publicationsListCopy.reverse()]
    for (let i = 0; i < data.length; i++) {

        publicationListHtml += `<section class="pub-list"><h4><a href="${data[i].link}" class="break-word">${data[i].articleTitle}</a></h4><p class="italics"><strong>Author(s): </strong>${data[i].authors}</p><p class="italics"><strong>DOI Number: </strong><span class="break-word">${data[i].DOI}</span></p><p class="italics"><strong>Year Published</strong>: ${data[i].yearOfPublication}<p><a href="./display.php?serialnumber=${data[i].serialNumber}">View full article</a></p></section>`;
    }

    return publicationListHtml
}
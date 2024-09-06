function validatePublicationData(event) {
  event.preventDefault(); // Prevent the form from submitting directly

  // Get the form values
  const articleTitleElement = document.getElementById('articleTitle');
  const authorsElement = document.getElementById('authors');
  const yearOfPublicationElement = document.getElementById('yearOfPublication');
  const DOIElement = document.getElementById('DOI');
  const linkElement = document.getElementById('link');
  const serialNumberElement = document.getElementById('serialNumber');
  const abstractElement = document.getElementById('abstract');

  const articleTitle = articleTitleElement.value
  const authors = authorsElement.value
  const yearOfPublication = yearOfPublicationElement.value
  const DOI = DOIElement.value
  const link = linkElement.value
  const serialNumber = serialNumberElement.value
  const abstract = abstractElement.value


  // Validate the form fields
  if (articleTitle.trim() === "" || authors.trim() === "" || yearOfPublication.trim() === "" || DOI.trim() === "" || link.trim() === "" || serialNumber.trim === "" || abstract.trim() === "") {
    alert('Please fill in all the required fields.');
    return;
  }

  // If the form is valid, submit it to the server using AJAX
  submitForm(articleTitle, authors, yearOfPublication, DOI, link, serialNumber, abstract);
}

function submitForm(articleTitle, authors, yearOfPublication, DOI, link, serialNumber, abstract) {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '../helpers/storePublicationData.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        alert('Publication submitted successfully!');
        // Reset the form
        document.getElementById('submit-form').reset();
      } else if (xhr.status === 500) {
        alert('Error submitting publication data. Please try again later.');
      } else {
        alert('An error occurred while submitting the publication data.');
      }
    }
  };
  xhr.send('articleTitle=' + encodeURIComponent(articleTitle) + '&authors=' + encodeURIComponent(authors) + '&yearOfPublication=' + encodeURIComponent(yearOfPublication) + '&DOI=' + encodeURIComponent(DOI) + '&link=' + encodeURIComponent(link) + '&serialNumber=' + encodeURIComponent(serialNumber) + '&abstract=' + encodeURIComponent(abstract));
}
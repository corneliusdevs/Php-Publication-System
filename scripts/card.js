function renderSigninSignoutCard(isLoggedIn) {

  const loginCard = `<a href="./pages/signIn.php"> <div class="card"> <span class="card-text">SIGN IN</span></div></a>`;
  const logoutCard = `<a href="./helpers/signOut.php"> <div class="card"> <span class="card-text">SIGN OUT</span></div></a>`;

  let card = isLoggedIn ? logoutCard : loginCard;

  return card
}

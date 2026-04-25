### Changelog

- 1.2.1 (25/04/2026)
  - [FIX] "Forgot password" link now checks `allow_password_reset` config setting
  - [FIX] "Forgot password" URL uses phpBB 3.3 controller route instead of legacy `ucp.php?mode=sendpassword`
  - [FIX] Invalid HTML in pbwow3 template — `<dd>` used outside `<dl>` structure
  - [FIX] Russian theme CSS selector inconsistency and missing password icon rule
- 1.2.0 (13/03/2026)
  - [UPD] Updated for phpBB 3.3.x
- 1.1.4 (26/07/2020)
  - [FIX] Add S_FORM_TOKEN_LOGIN to login forms
- 1.1.3 (25/07/2020)
  - [CHG] html twig syntax  
- 1.1.2 (08/07/2020)
  - [CHG] repackaged, update urls  
- 1.1.0 (17/09/2017)
  - [FIX] update for phpBB 3.2
- 1.1.1 (01/10/2017)
  - [FIX] listener fixes
  - [NEW] support pbwow3
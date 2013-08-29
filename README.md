# Credimax Bahrain
This contains the code necessary to setup the Credimax payment platform in order to process Credit Card transactions in Bahrain. I've kept things simple, and unlike the code that will be provided to you by Credimax themselves, this will actually work outside the box.

## Getting Started
Getting setup is easy. Configure your parameters, and you're good to go.

### Steps
- Copy [these files](https://github.com/yazinsai/credimax-bahrain/archive/master.zip) to your server
- Modify the `credimax/_config.php` file with the information you received from Credimax.
	- `script-out`: This is the script that redirects the user to the payment page (e.g. `http://your-doma.in/credimax/out.php`)
	- `script-in`: Cnce payment is complete, the user is redirected to this URL (e.g. `http://your-doma.in/credimax/in.php`)
	- `merchant`: This is your Merchant key, provided by Credimax (e.g. `EXXXXXXXX`)
	- `access_code`: This is your Access Code, also provided by Credimax (e.g. `XXXXXXXX`)
- You're all done! `:)`

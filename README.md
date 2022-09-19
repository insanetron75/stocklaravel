# Stock Test
I couldn't get Symfony to work on my machine, however laravel is based on symfony architecture and I have a dev environment already set up, I hope that is OK.  You may have to replace `sail` with `./vendor/bin/sail` in the commands below if you do no have an alias set up.

I used databse seeders fand factories to injest the data set, however I could add in a file uploader easily enough as a new endpoint.

## To Get Started
This is based on a Ubunto 20.04 but should work with any other version of ubunto 18+

#### Start the containers
`$ sail up -d`

#### Migrate and Seed Database
`$ sail php artisan migrate && sail php artisan `

#### Testing
I used postman to run 3 tests to confirm it was working, I would write unit tests but with the time I lost on trying to get symfony running I wanted this done ASAP.

First Test: Test that it can handle an Attribute and a Number
![image](https://user-images.githubusercontent.com/5969396/191094871-503b7f83-5a63-4834-9f0d-ce3bacf9c8d9.png)

Second Test: Test it can handle 2 Attributes
![image](https://user-images.githubusercontent.com/5969396/191094955-935dbd78-a5f9-4e93-af4a-6e958eff81bc.png)

Last Test: Test it can handle parameters as expressions as well as multiply when added (final commit before this one)
![image](https://user-images.githubusercontent.com/5969396/191094748-dc13172a-334e-4a07-8d22-ba59b0f0b385.png)


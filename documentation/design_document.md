# Design Document

Framework: Laravel

Models: `User`, `Task`

Implements the CRUD for both models.

Implements controllers, views, repositories for all models in the same consistent way:

By Model:
* Will have a single table just to store its informations
* Will have a Class Controller, containint at least the `show`, `create`, `store`, `edit`, `delete` and `destroy` methods.
* Each method controller, called *action*, will make changes using its repository.
* Each Controller will have a property that will be its repostitory, that will be initialized in the methods contructor.
* For each controller, will have a views directory with it's same name prefix. Inside each folder, will have a view, that matches the Controller's action name.

*Implements seeders*: for easy system visualization, create seeds both for Users and Tasks. May not user factories, because its is needed consistent information across system development environment.

Console commands:

`dev:env` -> Creates `.env` file. The command will asks for **database user** and **database host**.

`dev:createdatabase` -> Laravel does not provides anything to automatically creates the database. So, a command specialized for this will be required.

## Fronted

Although the [official laravel Transport page](https://laravel.com/docs/5.5/passport) teaches to use a frontend based using axios and Vue, we will use the axios for facilitate the api call, but the final objective os not to use the Vue library. May in meddle of the path we should implement the Vue, in the final we don't need to be dependant on it.

As we going to stick to the LTS Laravel version, we will use the Bootstrap 3.3.7, the version that is installed in the version 5.5 of Laravel. Although we can change to Bootstrap 4.x, for simplicity sake lets base on versio 3.3.7 of Bootstrap.
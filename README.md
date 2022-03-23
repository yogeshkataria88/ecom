Here is the project details:

Module:
1. Login
2. Category
3. Products

1. Log In :- In login module, we are using seeds to insert the data in table. Which helps you to login in system.

2. Category:- In category module, User can do multiple action :
    • create new category
    • update category
    • delete category(when you will delete category so I am deleting product whose related to that category)
    • View category(I am using server side data table which help to reduce the load on db and you can search the data through this also)

3. Product:- In product module, you can choose categories whose created in category module and upload the image of product with that User can do multiple action :
    • create new product 
    • update product(I am not giving a option to update product image but you can see the image or download it)
    • delete product
    • View product(I am using server side data table which help to reduce the load on db and you can search the data through this also)
    • In list of product, when you click on image so I am opening pop-up box in which you can product image in full size


In this project, I am using soft delete for category and product module and you can check count of user , product , category on dashboard too.

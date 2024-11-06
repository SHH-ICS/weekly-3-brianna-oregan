# get pizza size input from user
size = input("Would you like a large or extra large pizza? (enter 'large' or 'extra large'): ").lower()

# set base cost and check for valid size
if size == "large":
  cost = 6.00
elif size == "extra large":
  cost = 10.00
else:
  print("Invalid input. Please enter 'large' or 'extra large'.")
  exit() # exit program if input is invalid

# get number of toppings from user
toppings = int(input("How many toppings would you like? (1, 2, 3, or 4 toppings): "))

# set topping count and check for valid number of toppings
if toppings == 1:
  top_cost = 1.00
elif toppings == 2:
  top_cost = 1.75
elif toppings == 3:
  top_cost = 2.50
elif toppings == 4:
  top_cost = 3.35
else:
  print("Invalid input. Please enter a number between 1 and 4.")
  exit() # exit program if input is invalid

# calculate subtotal, tax, total
subtotal = cost + top_cost
tax = subtotal * 0.13
total = subtotal + tax

# print results
print("Subtotal = $" + str(round(subtotal, 2)))
print("Tax = $" + str(round(tax, 2)))
print("Total = $" + str(round(total, 2)))
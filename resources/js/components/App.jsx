
import ReactDOM from 'react-dom/client'
import React, { useState, useEffect } from 'react'

import './App.css'
import RecipeTitle from './products'

function App() {
  /*const [count, setCount] = useState(0)*/
  const initialRecipe = {
    title: 'Mashed potatoes',
    feedback: {
        rating: 4.8,
        reviews: 20
    },
    ingredients: [
        { name: '3 potatoes, cut into 1/2" pieces', prepared: false },
        { name: '4 Tbsp butter', prepared: false },
        { name: '1/8 cup heavy cream', prepared: false },
        { name: 'Salt', prepared: true },
        { name: 'Pepper', prepared: true },
    ]
  };
   /*
   // TODO: Create recipe state

   const [ recipe, setRecipe ] = useState(initialRecipe);



   // TODO: Add new state property
   const [ prepared, setPrepared ] = useState(false);

   // TODO: Create ingredientClick event listener

   function ingredientClick(index) {
       const updatedRecipe = { ... recipe };
       updatedRecipe.ingredients[index].prepared = !updatedRecipe.ingredients[index].prepared;
       setRecipe(updatedRecipe);
   }

   // TODO: Add the effect hook

   useEffect(() => {
       setPrepared(recipe.ingredients.every(i => i.prepared));
   }, [recipe]);*/

  
  return (
    <>
      <div>
        <article>
            <h1>Recipe Manager</h1>
            <RecipeTitle title={recipe.title} feedback={recipe.feedback} />
        </article>
      </div>     
      
    </>
  )
}

export default App

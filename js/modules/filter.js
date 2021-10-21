/* eslint-disable no-unused-vars */
/* eslint-disable no-undef */
function getSiblings(element) {
  const siblings = []
  // if no parent, return no sibling
  if (!element.parentNode) {
    return siblings
  }
  // first child of the parent node
  let sibling = element.parentNode.firstChild
  // collecting siblings
  while (sibling) {
    if (sibling.nodeType === 1 && sibling !== element) {
      siblings.push(sibling)
    }
    sibling = sibling.nextSibling
  }
  return siblings
}

document.addEventListener('DOMContentLoaded', () => {
  const grid = document.querySelector('.grid')

  const iso = new Isotope(grid, {
    itemSelector: '.grid-item',
  })

  const gridItems = document.querySelectorAll('.filter-button-group button')
  gridItems.forEach((item) => {
    item.addEventListener('click', ({ target }) => {
      const filterValue = target.dataset.filter

      if (filterValue === '*') {
        iso.arrange({ filter: filterValue })

        document
          .querySelectorAll('.filter-button-group button')
          .forEach((gridItem) => {
            gridItem.classList.remove('active')
          })

        target.classList.add('active')
      } else {
        target.classList.add('active')

        document
          .querySelector('.filter-button-group button[data-filter="*"]')
          .classList.remove('active')

        getSiblings(target).forEach((sibling) => {
          sibling.classList.remove('active')
        })

        iso.arrange({
          filter: Array.from(
            document.querySelectorAll('.filter-button-group button.active')
          ).reduce(
            (acc, selectedElement) => acc + selectedElement.dataset.filter,
            ''
          ),
        })
      }
    })
  })
})

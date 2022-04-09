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

function getAllQueryParams() {
  var paramsArray = [],
    hash;
  var hashes = window.location.href
    .slice(window.location.href.indexOf("?") + 1)
    .split("&");
  for (var i = 0; i < hashes.length; i++) {
    hash = hashes[i].split("=");
    paramsArray.push(hash[0]);
    paramsArray[hash[0]] = hash[1];
  }
  
  const paramsObj = paramsArray.reduce((acc, val) => {
    if (acc) {
      return [
        ...acc,
        {
          name: decodeURIComponent(val),
          value: decodeURIComponent(paramsArray[val])
        },
      ];
    }
    
    return [
      {
        name: decodeURIComponent(val),
        value: decodeURIComponent(paramsArray[val])
      },
    ];
  }, []);
  
  return paramsObj;
}

function handlePageLoad(queryParams, iso) {
  if (queryParams.length === 0)
    return
  
  document
    .querySelectorAll('.filter-button-group button')
    .forEach((gridItem) => {
      gridItem.classList.remove('active')
    })
  
  queryParams.forEach((param) => {
    const {name, value} = param
    
    const matchingItem = document.querySelector(`[data-url="${name}=${value}"]`)
    matchingItem.classList.add("active")
  })
  
  const filter = Array.from(
    document.querySelectorAll('.filter-button-group button.active')
  ).reduce(
    (acc, selectedElement) => acc + selectedElement.dataset.filter,
    ''
  )
  
  iso.arrange({filter})
}

function handleFilterButtonClick(target, iso) {
  const filterValue = target.dataset.filter
  
  if (filterValue === '*') {
    iso.arrange({filter: filterValue})
    
    document
      .querySelectorAll('.filter-button-group button')
      .forEach((gridItem) => {
        gridItem.classList.remove('active')
      })
    
    target.classList.add('active')
    
    history.pushState({}, "", `${window.location.href.replace(window.location.search, "")}`)
  } else {
    target.classList.add('active')
    
    const url = window.location.href;
    
    const attribute = target.dataset.url.split("=")
    const attributeName = attribute[0]
    const attributeValue = attribute[1]
    
    document
      .querySelector('.filter-button-group button[data-filter="*"]')
      .classList.remove('active')
    
    getSiblings(target).forEach((sibling) => {
      sibling.classList.remove('active')
    })
    
    const filter = Array.from(
      document.querySelectorAll('.filter-button-group button.active')
    ).reduce(
      (acc, selectedElement) => acc + selectedElement.dataset.filter,
      ''
    )
    iso.arrange({filter})
    
    const queryParams = getAllQueryParams().filter(param => param.value !== "undefined");
    const filterWitchMatchingName = queryParams.find(param => param.name === attributeName);
    
    if (filterWitchMatchingName) {
      const regex = new RegExp(`${attributeName}=([^&]*)`);
      history.pushState({}, "", `${url.replace(regex, `${attributeName}=${attributeValue}`)}`)
    } else {
      if (queryParams.length >= 1) {
        history.pushState({}, "", `${url}&${attributeName}=${attributeValue}`)
      } else {
        history.pushState({}, "", `${url}?${attributeName}=${attributeValue}`)
      }
    }
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const grid = document.querySelector('.grid')
  
  const iso = new Isotope(grid, {
    itemSelector: '.grid-item',
  })
  
  const queryParams = getAllQueryParams().filter(param => param.value !== "undefined")
  handlePageLoad(queryParams, iso);
  
  const gridItems = document.querySelectorAll('.filter-button-group button')
  gridItems.forEach((item) => {
    item.addEventListener('click', ({target}) => {
      handleFilterButtonClick(target, iso)
    })
  })
})

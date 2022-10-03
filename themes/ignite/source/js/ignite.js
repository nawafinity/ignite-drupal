import 'bootstrap'
import 'boxicons'
import $ from 'jquery'
import 'slick-carousel'
import 'external-svg-loader'

/**
 * jQuery
 */
try {
    window.$ = window.jQuery = $;
} catch (e) {
    console.error('We cannot load jQuery.')
}

const ige = {
    'init': () => {
        ige.sliders()
        ige.collapse()
        addEventListener('scroll', ige.fixedHeader)
    },
    sliders: () => {
        let sliders = document.querySelectorAll('[data-ige-sliders]')
        if (Array.from(sliders).length > 0) {
            sliders = Array.from(sliders)
            for (let index in sliders) {
                const slider = sliders[index]
                const dataset = slider.dataset
                const html = document.documentElement
                let rtl = false
                if (html && html.dir === "rtl") {
                    rtl = true
                }
                if (dataset) {
                    const configurable = dataset.igeSliders
                    if (configurable && document.querySelector(configurable)) {
                        let config = document.querySelector(configurable)
                        try {
                            config = JSON.parse(config.textContent)
                            $(slider).slick({
                                rtl: rtl,
                                ...config
                            })
                            console.log(slider)
                        } catch (e) {
                            console.error(`Slider (${index}) has been skipped, the config not valid.`)
                            console.error(e)
                        }
                    }

                }
            }
        }
    },
    fixedHeader: () => {
        const header = $(".ige-header")
        const navbar = $(".navbar")

        if (window.scrollY >= navbar.offsetTop) {
            navbar.addClass('navbar-fixed')
        }
    },
    collapse: () => {
        const collapseItems = document.querySelectorAll('[data-ige-target="collapse"]')
        for (let collapseItemKey in collapseItems) {
            const collapseItem = collapseItems[collapseItemKey]

            // Datasets
            const dataset = collapseItem.dataset
            if (dataset) {
                const {igeTrigger, igeHover, igeContainer} = dataset
                const triggers = collapseItem.querySelectorAll(igeTrigger)
                if (Array.from(triggers).length > 0) {
                    for (let triggerKey in Array.from(triggers)) {
                        const trigger = triggers[triggerKey]

                        if (triggerKey === 0) {
                            ige.collapseTriggerEvent(trigger, igeHover, triggers, igeContainer)
                        }
                        trigger.addEventListener('click', (e) => {
                            ige.collapseTriggerEvent(trigger, igeHover, triggers, igeContainer, e)
                        })
                    }
                }
            }
        }
    },
    collapseTriggerEvent: function (trigger, igeHover, triggers, igeContainer, e) {
        const {currentTarget} = e
        triggers.forEach(t => t.classList.remove(igeHover))
        currentTarget.classList.add(igeHover)

        // Show content
        const dataset = trigger.dataset

        if (igeContainer && dataset.content) {
            const container = document.querySelector(igeContainer)
            if (container) {
                container.innerHTML = dataset.content
            }
        }
    }
}

$(document).ready(function () {
    // Run application
    ige.init();
})

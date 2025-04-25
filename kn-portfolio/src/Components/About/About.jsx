import React from 'react'
import './About.css'
import theme_pattern from '../../assets/theme_pattern.svg'
import profile_img from '../../assets/about_profile.svg'

const About = () => {
  return (
    <div className='about'>
      <div className="about-title">
        <h1>About Me</h1>
        <img src={theme_pattern} alt="" />
      </div>

      <div className="about-sections">
        <div className="about-left">
          <img src={profile_img} alt="" />
        </div>

        <div className="about-right">
          <div className="about-para">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, neque.</p>
          <p>Dolorum, quia dignissimos asperiores doloribus libero dolore magnam nesciunt totam!</p>
          </div>

          <div className="about-skills">
            <div className="about-skill">
              <p>HTML & CSS</p>
              <hr style={{width: "50%"}}/>
            </div>
            <div className="about-skill">
              <p>Ruby on Rails</p>
              <hr style={{width: "50%"}}/>
            </div>
            <div className="about-skill">
              <p>LAMP</p>
              <hr style={{width: "50%"}}/>
            </div>
            <div className="about-skill">
              <p>React</p>
              <hr style={{width: "50%"}}/>
            </div>
          </div>
        </div>
      </div>
      <div className="about-achievments">
        <div className="about-achievement">
          <h1>7</h1>
          <p>Years of Experience</p>
        </div>
        <hr />
        <div className="about-achievement">
          <h1>7+</h1>
          <p>Years of Experience</p>
        </div>
        <hr />
        <div className="about-achievement">
          <h1>15+</h1>
          <p>Happy Clients</p>
        </div>
      </div>


    </div>
  )
}

export default About
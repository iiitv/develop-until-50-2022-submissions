import layer1 from './assets/layer-01.png';
import layer2 from './assets/layer-02.png';
import layer3 from './assets/layer-03.png';
import layer4 from './assets/layer-04.png';
import layer5 from './assets/layer-05.png';
import layer6 from './assets/layer-06.png';
import layer7 from './assets/layer-07.png';
import { IParallax, Parallax, ParallaxLayer } from "@react-spring/parallax";
import { useState } from 'react';
function Home() {
return (
    
        <div>
          <Parallax pages={1.45}>
            <ParallaxLayer
              offset={0}
              speed={0.5}
              factor={2}
              style={{
                backgroundImage: `url(${layer7})`,
                backgroundSize: 'cover',
                backgroundPosition: 'center'
              }}
            ></ParallaxLayer>
            <ParallaxLayer
          offset={0}
          speed={0.8}
          factor={2}
          style={{
            backgroundImage: `url(${layer6})`,
            backgroundSize: 'cover',
            backgroundPosition: 'center'
          }}
></ParallaxLayer>
<ParallaxLayer
          offset={0.9999}
          speed={1.5}
          factor={1.1}
          style={{
            backgroundImage: `url(${layer5})`,
            backgroundSize: 'cover',
            backgroundPosition: 'center'
          }}
></ParallaxLayer>
<ParallaxLayer
          offset={0.9999}
          speed={3}
          factor={2.1}
          style={{
            backgroundImage: `url(${layer4})`,
            backgroundSize: 'cover',
            backgroundPosition: 'center'
          }}
></ParallaxLayer>
<ParallaxLayer
          offset={0}
          speed={2}
          factor={4}
          style={{
            backgroundImage: `url(${layer3})`,
            backgroundSize: 'contain',
            backgroundPosition: 'center'
          }}
></ParallaxLayer>
<ParallaxLayer
          offset={0.87}
          speed={1}
          factor={1}
          style={{
            backgroundImage: `url(${layer2})`,
            backgroundSize: 'cover',
            backgroundPosition: 'center'
          }}
></ParallaxLayer>
<ParallaxLayer
          offset={0.9}
          speed={1}
          factor={1}
          style={{
            backgroundImage: `url(${layer1})`,
            backgroundSize: 'cover',
            backgroundPosition: 'center'
          }}
></ParallaxLayer>
          </Parallax>
        </div>
      )
    }
    
export default Home

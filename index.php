<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Rajagiri college of Social sciences</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="academic.html">Academics</a>
              <a class="nav-link" href="academic.html">Careers</a>
              <a class="nav-link" href="academic.html">Library</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact us</a>
            </div>
          </div>
        </div>
      </nav>
    <div class="container">


        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img height="300px" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSExMWFRUXGRgYGRgYGBodGRgXGBgaFxcXGB4YHSggGBolHRcVITEhJSkrLi4uGB8zODMtNygtLisBCgoKDg0OGhAQGy0lICYtLS0tLS0vLS0tLSstLS0tLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAS0ApwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAQIHAAj/xABGEAACAQIEAwUFAwoFAwMFAAABAgMAEQQSITEFQVEGEyJhcTJCgZGhFFKxByMzYnKSwdHh8BVDgqKyJFPSFpPCVGNzo8P/xAAZAQADAQEBAAAAAAAAAAAAAAABAgMEAAX/xAAwEQACAgECAwUIAgMBAAAAAAAAAQIRAxIhBDFBEyJRgfAUMmFxkaGx0cHxBULhYv/aAAwDAQACEQMRAD8Aslz515JCDcHUVPJHfUb0PQCM+8DrcadR0NAzA1rDKVNTyi+oqsXYrVC6W/U/Ok/GcKXXMCcy6ixPiG5X6CnkooSRaIDm0XHpe+JlkZ43W1gSAYm5qAfCynfndajxhlicoZXOxVszWZDqrDXmP40z7X8FytnTRXa46JMdweiyaDyYA86U4KXv4e6P6WK7R9Sv+ZF6jcehpGjiM4uT/uP+8386K4fhsTMfzbsADq5c5Utrc6/SvYPhgCiXEsY4z7K/5knoPdHn+FY4jxUyL3SKIoRtGvPzY+8aWjrsc8V4r3S97A2ZpCVea5sHUDMEVtFv7V6rL4uQ3PePc/rt/OjODsGzYdjZZbAE7LKP0bfPwnyNLpFKkhhYgkEdCNCKIDDYiT/uSfvt/OmOMafExwyRNI0n6CQKze2gvHIbEAXTc/q1Hw7hLSqZXYRQDeVufkg3Y0dgOKxGRsFh0MSSoyiUk948pHgJPuqTpb9blROPYcrhTaSZsRiPuB27uM/rG/jYdPwpNxHiOIMxMkshv0YgAHYAA2Fqg4T4Ws6+y2o6EHUfQ1Y+KYFMVIZo1MOH91m1ZtLkIL+K2uuwGpNJOcYLVJjwxuT2F2L4jJJKjRu7M0ah1zNYSJ4S29rEAHTrUHEXmQCQzMcxa4VmCqdDZddRa+o00rXE4lUBWEeG9i29/U+9+HrvXsHKWjfmyESi+vsm5+Fs1QeSdqXJeBvjhiotII7J/amxCsBM8RurHM1graE6nle9GDArEf8AqMa9xcd3Ezs1uQY3sD8qRYzjOLnazSkKDoqgKgsdNF3+N6P42jNMJEUESxrLvYAkWf6ith5ju9xtD2iWPSGIgfekdnY/M2FeqtxpKwzeBR516upHbHf1jNQ4iH3h8f50/wCzkkci6jXoeVtwR1FZ4tw8L4l2/CkaKFWtUkT20qXFQ21G34UOaXkE9MtCSCjL1BKtVTsUW4zDLIjRuMyMCCPI1Q+IYYYJzIV7yXTK7HQaZe9K9SdPX1rozik3aPhffR+EAut8oOzA6NGfJh8iAeVcwUUni795lxIJKyeFgTfJIo1T9k+0PjQN634dMsTtDIT3Motc7gA+F/J0a4I8jReG4NKXdTZFQ2eRvYA5EfeuLEW60gOQJFEzHKgLNyA3+FWHiWEjQDE4hO8lsqvEpGUS2NnkI2uoGnUGhG4gkClMMCCfamb22/Z+4K14bw+ORA7LLK5ZgVBIUEai+Vb6g3uSPWp5cixq39iuLF2j50KuKcTkmOaRtB7KjRVHRQNqFk4fL4XyuoJ8LZSLsPFoT6Xq24xThmUKkcLKAwUDU32Dklr6dTbWi5eOM2HZY4g09iX7wlgy3uQuYnQi4t8jUVxLdUkvmaHhhFcrNeE9lpftPf4nugQ2eSJha7Ha4HtAmzaXB+dHdteHgwGUl5CjIZDfLmjvYrYaBRcEAWAtS7hnE8U8bGfDu8EZYgg2khtuIGJvIqj3TcWG9O8NxOGWII0ySwzBow40N8uqyIdVYA77elxS8Rjkpqa3r6168xYya5nMMXjC+gAVeSjb49TUnCJcsov7J0Pod/pehcZhXhlkhk9pCV08juOoIsfjWkTWsehv8tavKCcaXU04pXsFzJkzRqCZMzLoLnQ2v+FOBwieXCxBgISjMt3soMTAMNzrretG4g8ZzRtbvEU3AFyy+A6kHLyJt1qdsNdZoTMJ3eLPmDlxnTxgC+xHiFqfFJygmefnjpmzRMFhVus2JaW2hCDKoPqbXr1BqsCwZlIMtwBGUOq2uXL7fCvVWiNHaosS6OWUfnBbOgPtjYMpPPofgeVOBxnvkBBuD+I3B6Gl2KwubY2Yey3MfzHUc6BXMjF1XxC3exD3xsJI77n8djqKUZMa5PlQGJgKnyO38qa4eRHQSKwyHZjt6DmT5UFi8YpBVRf9Zt/gPd/Gg0OgK9YcVivXoJ0FoHdajIollqIpVRSmdqeCRhu/Zcylrsmaw7w+Ea8g5yg8rjzNJJMe2KhOmVobnuxfL3exsPvJbXyvXR8ThldWRxdWBBB5g71zTi+Hkwc+cHVSCWOzKdFc9bjwMOuvvUrQKAywG+rcgP7+tO+wnFMk7L7zr4eistzbzut/lQn+CqziUP3cEtiq2JlYneJQddOu1rVY+5iw0eSVUiAZXSOMk4i63sZHvZLg6ggm21Syx1QaLcOpSl3UIuL4DE4t3njAZe8yE5h4baZmvsvnWIWgwugb7XOdLLfulPTTWQ35bUNwdsVNiScGCniOoJyIt9AxO4ty1JrpfDOBwwt3pVGxBFmZVyi/MhbkLfyqMIxjHcvrSfiUPicuNw8sOJxAOp8IuMo6x5Rovhvp0pbisauDmPdi8TumIgZfcvcMLc7A2t1Ra6txThUeKidJFzbMovaxXUW6X1BPQ1TuOcDOMwpyoFmhvkUC1wPahI5MOR8qrjetMjn4hLTGQnxa4XHSEXTCYzTc/wDTYm48JUn9CzadRVZx2DkhkaKRcrocrLobEeY0Nb4FY5UMcoOdBYN7yrf5HKSbg8j5UxXs9KzqFcSKQPGCT8GB1DDz0866U0luV4d78yCIloB1RrfBvD+OSmGA4fLFIkkrRxAMCQ7C5GxFh1BIobFPFCrRowckWZgfCD5H3jpy08zSd3uSetDh22nttewOLirW4+nw2EidldpZGDEFVGULzAuSL6GsUBxd7mKX/uRLf9tPA34A16tKRipH0DgsUJPCRZxvyBH3gTyofiLKSMmsim6t7oPMEe+DzGg+IBoeWIMPPkelBz49Ibd9dV1zOB7oFyB0ZtvnzIpaG0kJxDBmktoTeRPX/MQWtY67e0BfemCsGAINwdQRzpDwrjyYy7L+bmUk5T92+m3tLa1xyPwoyGTISQDl99PuH7w/VO/160rCmMKxRUWHB1JvzFtvnzraWMEWGltqDQ1ggrzJWDUkbdaMXWwGgd0pPx3hvepooLrql+Z3yHyNh9KsjRUNPDVBTk3DeLyJiCsrlgxujN4cjAFRqPY5owGx15VJx55MP+cdCnfJII1O9zYEsDc8zqd6ueI4OqSS4oRq5VcwGXMVkuAZEXZiV1seai25qHjWC4bjSvfY5g6CwzSIhW+purKLG9SlFN0Wx5Jxi0uTKtwXt+YcOIVjVWB3RQuZfMk+1+NWODtYLIXGUyKHUNoSp0vS6T8l2HcfmccD0vkb/iwrWX8mOIJuZ45MqhVF2XbYHQ2HpQljUmhFKh3Dxyz5swFxc3Pu/wAqt/DiqxnFSIojmsA4O7ZBkc22v7N97gCqJFwXFgCKbDd5GwAdonUsjoMqTRhrG+UAOp0YAVDMMWPC2HmyroPAxUgc1AvlHlVcWPvJp1X3M+daotP+mLO3XCVDnH4UXUPlmUDQN9/9lgbHzNK4MZ+a8IbORZANS2bSxHOwzA+lWzhuLKxzBoz9943BGaI2SRfEB5G/Wq3x3hUuDjaSB74aRgUcWzqHB8PUHSxtzWhxGBakPwudxWl86A8Vw5AsbzyCIhe7ZVGY3F2W+XZsp1v0of7Rg02jllPVmCr8heleFkLiSPfMMw6511B9SCw+NZi4TKdwF9SL/Kigv4j5OOfmGMMUaGNxpbN4HFifFzzAfOvUPwvgzoST4gwsQFPUEfUV6uO2O5Co8Th1kUo4DKdCDtW96yKA5UOG9lRh8SZM10A/NjmCbg3PMAbevlVgkHvLow2PL0PUfhR0iZtKEnuDrz59aAJK9yHC4nJ5JfUf9tv/AAP09KufD+Eq8WbN4j9D0qmmPXNzHXYjmD5fhRnDOMtELAkKdP2D91vLof6VwEwjG4exI94aUHRMkpJvzqGQc6VocKwbhvCd+X8qkkw/KlwNtRT3AyCVf1huP4+lNF9BWil8cnaOQLl8JVrnkSfDY9bC5+Vcn4rhpJJsi5pHa2guzGwG/wDOu5dquFLMmTNle4I5+tx0IpFjMFHgsPLJCoEhVru/iOgLAE75Qfdo5JwpLqHGpJt9Cpdn+xkcFpcVZ33WIbD9r7x+lO+PTviY+6hZ4p11Tu2YabeIqdB5nSpOD8Rwj548S95Cf0oGUW2ULqSvWx01onjPBsVDhz9g7t76lv8ANItuPdZvP5CpRdspoaNeEYPu+7gxnEJGxDm6DvCMj28Jt72v39Dtaq3xntrxPA4hsPP3TldQTHYMvJhlI0NUx4cQGLuk2a+rFWvmHU9a6BA6cawncSEDHQKSjHQyKBz+lx1sae3ZRwVWn6/RJwjtS+OkCzIi2Vk8N7N3lhqCToLD51WXEuIw7QOCAk4y5RcF7NnAv7OgH0rPYzHjDNJDiVKqXALW8cLrs4vuoucy8watkPAjDLNNoUlkuhU3SzKHzLy8RJ16LVp7wS5GPQu0baE3DOzaIvi08huf2jzpzh8BGuyD5UYEqRI6FDURqleopIq9XBLJNBbbb8KjFF9+ubJfxdK0mg5j5VJPxGIFrLoCLGsLWwpjgCZCunXn5Dl8/wAKHlhvqAL2sQdmH3W/gabOoIsaU8axP2eNpSjuByQXPx6DzrhGvAzg8Raykm2wJ3B+43n0PP8AE40tRc65rAMQMyk6Hyv1HI0Xh5h7JNzewJ588p/XH1360GjkzdhUuDnMbhh8R1HMGvWpF2lndSqAsqkEkroSQfZuP71qc3pWotjhrekc4iXuyXYM2dvAbhnkO5VVG2Xaxt12qr9qcSSh75lUA5VjzDKZWHgR296wOZjsqjmSDQsWMkU5llcNa1yc2nTxXtSvi3BRiipkka6iwsbDU3Jtb2iTcnnWOPEY1K3dmp4XVJr7lTlcvLIIgZACTYG7WX2mHUGxOnWmnZbtFikmSOByAzDMrjMgHO639drGpB2MdCHimYMNiNx8RasYbhk2HfOLZr3uet9b3HPn61RZcPOL3CsOaXddV81/Z0mTHRMkUuKXuDKoKzKbLqLhXY7Hya486H45Hi4lzRQwToRpImZZE/XGW97b3U0l7OdorKcLjI8+HckDS4jvy3/RjlzFDcRGK4U4kwcwmwjHRCc6LzsQD4NOYtWiGVSVkMmCUHTXr10DuL4SLHw/bYlyyaRzqRbu5BYd44tfKR/DzplwvBdxhlgDM4vqWOx30HujoPXrWvAu1OExJLMPsszjI5OXupQfdYnRhvo1j0NFrhWhkMLsGFgyEXsVN7A394AHmbjW51rTHJGUNEvIzTjLUmuRGIqkSOiO6rdYqBxoiVitcdxOKAhXJzEXCqrMxANiQFBNvOvUtoO5Yhgo+8MuRe8ICl7eIqNgT0qa1bEVvDAz6KpP4fOpBBZ4gdt6FNNJsOy7i1DSR3op0cCitioIsdRXipGhrNOAWRYHus1j4PdB2XqB5VEIGIzEDxaldr31GvJhyPkPg4IuLHatGtbKfgf4GuFaAsHLchSd9iedtwejDmP7DLtXwnusMZBZ7ctOe1r70unwx1IHqNr22IPJhyP9jGLxbSwBC99SLnyNtVOx02qeRpLdFeHk1NNdDnycdjYkNddeeo+m1TO2cZlZY4h7Ux2t0T77fT12rP8A6QCMWY96o1CHQE/rHmKQceixrm8kJyL7Kx6oo8gPxrI4RvY9325zWhtfOiz8SwskKiWOTvoG2k0JW/37CxX9b52oP/ESdxekXZ7tO+FbKfFGfajfTfcrfY/Q86f8RwiNF9pwf5yL34x7UR3Nhvl/V5ctKm8Sb5D45YVtkSfg1/NdSbD4+Pmn0FGxyQN7i/K34VSRxJztYDy/rT/geBkkYEXY1SHAqXILx4ZPuX9Q/j2FyYLvVgveU2kGuVF0ysLeG7a5uflWeyuPk7qW8TyRaBXXxOkyDNGAt7iM3ZdBrm9aK4V2gOHnnw8wz4ckqyEXtsDYH43HOnk+ERHwvd5O4MhZJBYADuZfC/Ujr89d7wq0r3Wx5fET06otWr2frqBGXGy/ooUw6/enOZ/giafNqYcMV8lpGzOrMpa1rlWIvblpamcuJjC3jEmIPSBM49C+iL8WFCYK5zlozGe8bwEglb2IuV0vry61oV9TzrIBCTjIre9DKPiHiYfiazW+OwcUkuHEwumZxuRqY2YbEfcNeoSW4GWdEA86OixlqAYcxWL0DhvPOjrY78jSKaMqbH+hqbvK80lxY61zDYIwvUDpb0ol1tttWl6C2DYODXiL1mSO2orQGnW5wr7QYvERRqYFR7uqnNfMATbwgEAn19aLxYQIuYKMqgsw22udRv61BxSbDurQyODfdUYmQegj8QNKsfxNIoc5RwkRCRpIAGlkUDLcb5FFmN7G9hasPGwlLSoujbwUU5NVbYsxXaBluxj/ADfeNGLmz3UBjcHyIrSLjMTG+ZkPmNPpQ0HD14lJ3ccjRLAgbMV/SYiZi0rML6C4IAvsor2L7HTxhb4eHEZSfErMC69GRrC/mD8KMVFrmPmx6JNLnYTicXhHFpGhk/dLfIamteEcKCyd5g4p1PO4yRkdGEhBI8wDUqcTw+EhDyQHDklh3ax+IWO5sBodwdqUYr8qKL+hgYnq7Bf+N/xqyxRrmZXkktmO8R2DM0neu0eHv7SRXYE39oFgoU+gNMjwL7JE02GeSR4ypYMwN0JsbBQACND865vjPyj4x75THGP1VufmxNM/yfdtJFxfd4uVpIcQO6bMdFJ9lrbAakHybyqkLi9ii4jIt0wnFl8ViCkMTFybtodDfUsT7IvzNWrB9mRGcN9oIlJltkIvGv5p20De0bqNbcqdiJkZomY50sM17F0/y3PW40PmrUJxdMQTBkdVHejxlczhij7DRbZb78yKz4oKMvidmzynH4F1gxoEXdhQABboAP4VWUlVpJsrKwDgEqQQD3aXGnPyoYdnUfXETSz9RI9k9MiZU+lSYPDRRPJHEqqoyGygAXK20A/ZrWmY1zF3bKVkwxkS2aN1YXvbW6Hbyc16jO0GG73DyR9cv0dTXqDQ6otPPyP0NROvOlQkkQXB76PezECRR5N7Mg9bHzNFYXFxyC6HUbg3DL5MDqKBMna9a5q9r1rBoHHjUbCt6xXBs0qKZQAW2sLn0G9Tla8tdyDZV8F2mgkLpA9lVS7yBLIi82JIGYk7AXuTXNeP9pDiZSyqRGtxGpOy3vdv123J6mnvbfikQd8NhlVVZ88rKLCSUbKbe6uvqxJpJ/gckcRkFiGG9r/AHlSxUZtqXI9rBhzYorJiu/ly9fgk4F2xOBNu5D97Zyc1mAF1AHK2hOvWrvw38pGFksGuhPI9f78q4rjZbufKyj0UWqAvXSwxPMlnlKTk3uz6Tj4rh5gArI991Njp6f0pZxLsHgMRc9yqHrGcp+Q0+lcAjZrgi9xta+npVo4Lx7iKECN3boH1Gm9r7UnYNe6zlm8S0cW/JHYFoMRt7so+mZf5VTOJdjsbDq0LMB7yeIfTWuhcO7T44gCeGMjyZgflYg/MU5TjMjSxRrGFzm3iueg5bb+dNDXbXOic5Q2dc/uY7J8dOKwaSvf7RhBkmHvPDYeO25NgG9VYc6dY2Mt3JQ6CVXJHJcja/UC3nS3jEsMaSMxWOZNQwtnVhqPMg9NmFM+HSGxjYWKBDb9SRA6fK5X/AEUIwi8jnW/IZyehRvYJJ8vmawVF81gCQAbcwL2/E1tWLVclR6sV6vUQir7K6sVjPhtcqxNgARYX38vMg8qlGNjkK96DFL7pvZv9Lcx5GmfDcJeO7Eh5PERbZF2BPL+d6gxMAYjwg311HLZfrr/pNIyZsMVJGPGO8T76DxD9tB+K39KNhlVwGRgwPMGk7YeWEgRHMoHiVzztfQ8tLfE1PhgkjEqWgm56WzftKdHHnv50AjQisWr2HlbN3cq2OgDrrGb7Xvqh8j86Ox2EMYFxe/Pl8aNBoBFR4vGxRDNK4Uba7nyAGtFrAR7X02rlHFuDs0yvLKArYrEGUXbMAGCppbWyEH0pJzUKvr/Y8MbndDzjnBMBKueODELmGYNFEwvzGhFj8hVPGClVSjTSqh2UxkW9b6X9K6tFx/C6ASqANAL7DlRsXE4W2kU/GkTXOkbFxGaKqORo4G3AMMDrKT6/0rZOHYZTfeu8zph2UlhGwHIhT+NU7Hdn8G5LNCi36eEegtYVqx5v/Pr6Hm5MD6T9fU50s8SutgLWPz0omPi9p4slhfw8rXOw+NWrE9hcGQCUlQE2DeMLfkAWFr0RgvyVYSVCe9mVgdww9RoRRlnVcuqBDhnq59GvrZbOAdme/jEkgAJ6H+FLONSQYaZAw8SsACbiwJsW6ab17B9hp4f0fEMRboXdf+Dfwqt9quxWJVXnkxWaMMWN3csEbRUGa97dedTcuHWqSVXvtd3zHWLiEoptOvxy28h1+U7h14Bj4Y42kUKHZkDMI9TmW+xBO/SgeynEo4Ic+ImjXvAHALXOSyrGuvivpIcvK461YPyfO0mBjixF2DoVOa9yCLWa/O1exfAIYJcKscMaH7RYlVFzaGU6nc7A0HGmVx5u44tAw7RB/wBBh55vPJkT96S1x6VPw/E4lnInijiUqSgVy7aEA5tAB7Q2vV0wnCwy3JpTxzCqjxEG5IkB8vYP8KIlgVerNeohCsPi0k0U2Le62hCLz13G+ouNa3iAzFyNBrb4aD5WHqxpNLgwb20HTcfI6fHepYMTKlh7S32NyOo19oa/telKxKHWGw5JAO5Nz87n62+C0fJwuKQMZFGXrsQq8wRqNB9TS3h/EU1LeAnQZtumjDS/tGxsddqYcZk/NrCPamYJ/p9qQ/ugj4iuRyFvCcLNGglFmSTxEMQHC7KNdH8NtNNudGyYtF8UM1zziIJQ+RB1jPp8jR/EsGskZjI0AsPI2sCOn9a57izOrrGF7xywVSTlYX53AOgFyR5UWw9dizLxdNVWLIx1ys1x55ORHp8hXO/yk8KYunEIR+cjKiRV99BoCBzIvY9QfKugxcIBW0pMnX3RfqLa/WouJBB4EAHU879L71LtE9iqxtbtlFw+CmkymPDyve3u5Rr5vYUyw/YvEP8ApBDEP/cb4hbD/dVsn4tFEPFIAB50nxnbjDp7Pi9P7t9a872SK/6eiuInPaK+m5PgexOHS2dpJD+0UX5RkG3qTVgw+DjT2I1X0Gvz3rnuL/KE2ojUeX96/jSLG9r8W9/zgUeQ/ncVdaYqrGXCZ5u9NfPY7OVSVWjfK4bQqdbjzqm8eTE8OvLETJhuZtd4umf76frbjnfeuecM7by4aTMZDKpPiU8/MEeyfp5V1ns/2shxcRZCH5MpsGW/Jh/HY1RJtd0hkj2UqnTXwfporUHbiWwJAb0tY0D2t7VvNg5ECBT4SSdRlVhcfHatu0nZjuyZsGhykkvB05lov/D5dKqPHOIKcOgTXO9mG1ggJIIOxzZaXHDLrUZcvkCfZabidS7JIi4HD3PiyA78zrW3ajiWU4JwjSN35GVLXa0MnMkAb8zW/CeATCGPOygZVy2B0UqCAfMVDxjhirJgwWLXxIHT/JlPXyFehOSZ5UFJSfgGxcSx7fo4IolPOWYs37kS2/30Ni4MQHjeedZAWZQiRBFBKE3uWZifCRvbWnscVtqH4wFEa3Fz3i5TfYlXGvXQn51NMohfWKzXqYYS9kcW0uFjZ/a1U+eU2+dOaD4Pw4QQpEPdGp6sdSfnTFHsCLUAkLRDfY9f73oWWOZWV4pMpUEAWFhfew2UnTa2wo2tq4An7R8el+zohzrIGuzXGVwdN+uo08qT8BxcwYThcxVn9trAqsfjN+WrAVbXAIsRpS7FcJQoyr4AwI02sTdtNjfzrtqpg007Rv2d49PjHlDBY40C+w1yWYm3i9AfnWnaTgCslxLMpJHsvp56W1o3sjw0YeEqxW7OTpoLAAL+B+dHcZkTu9wbkcxWNVrpM2ydxuq9fE5dP2SJv/1EnxVT+FjS6fsfKuqzKfVSPwNdHKA8qikQVoeOIkeIyLqcxk4Bi15o3xoDFcJxXNL/AB0/CunYvGRpYMwBOw3Y+ijU/AUwwfZ/FTaiPul+9KbadQgu3zy0mmEd2VfE5pKrOJnhmI/7R+FT8OXFwSCWKOVHX3gpNx0I2K+Rrui9kEN0+2kzWuAqLkFt7rqT+9SnFcJxWHJ76HOg/wA2HxC36ye2vwBHnTrInsZ3BvfmbdkO1QxICTxNBMOoYI9uakjQ/qn60d2p/J/DjIXljIjxAuQwPhc22cbXOnioTA4lHF0YMPI7eo5elWLs/ItzGQLHUaDfn9Pwo6nHcVJXRtJ2twsUccc0wRwgHdlXMnhGU+BFJOoOuxqs9oO1sTvhWhhxEmTEBtYu7DfmpFCr3pGvivqNgavGIWEHxZL+gvXPO000n+IQeK2E7yPKLLbvO7fMfvdd9KEJ6ugJwUeo4XjHEJD4MJFGOskzMf3Y1A/3UNiWx2ePv54MgkQmKOMBjc5RqzltM19LVPgY5xjGxGYmJi4y66JbwWB03C0Dxng57/7WDlJljYg81zqCN97eXKnJRp8x7Xq8a9RGNzWDWbVg1xxivV6sVxx61eNYvUqcPxDrmRIypvYtIRflqAhtSykoq2NGLk6RPgMTJpGmXnYNf1sDepsRFMMxlMDBRfKqs7+Qyi5vQ8PCJv8AMiR+oGIZF/2xZv8AdU/DXmw6skeEw6qWJ8MxUa9bQa1k04HkcmjXFZFGl+V+zn/EOKY5nIiwsUS30Mqi/wC6pv8AO1M+A8K75j9skZjbwrFeKPTe+U5if9XKmPEcHiXJbJACf/uOf/5iq3xHg3Em2xcMY6IjfidabRjvuqjpOfUtGIGGw4OQRxDmRYX9Sd/iaU8R7XRhcpd5ABoFBt5amy/WqJiuxuJZszYlHb7xDEj4k1s/ZPFMPFigf9LH+NaYYdiXaRvvfYsMPbzI4ZYNB+vZv+Nvh9at/CPyi4eSwZwrdJPCfg3sn51yb/0jODpiVP8AoP8AOn/ZfscWfLJi1jY6KTCGU+WrixqWSMo7vctF4J+Mfv8As6fj+G4PFEO6ZZOUqEq/7ye0PI3HlVfx/D8VAx7orilHIkRyjyv7Dn92psH+TeaK5j4gYz+pAAvndO8yn5U+i7PYgAXxUZ6n7ORfz/TaUkMqQmSC5KSfk/0UiPtMgl7mSNopOSy+DN+yT4W+BrHHsZK+Lw4QFoYniZlCAgMEYOS1rn2rWvarTxDCBX+z4lo5VkW63jygkGzJZma51B0tz6VD/gboD9nkIAGkUniX9lWPjTpuwHSqwfW9iLpbAvZ7ic6OwlWVomVrKWUkPmUjdtBbOPgKH7R4STFSxsloo0AuG8RJD5iRbY2AG/KmEMoZVYbMAfmL1IKqSUaMtWKzavVwRAkki7Fh8bj5Gp4+LOPaAb6H6Vo0ZBF/xsT6daZYHhMkwJVLgeY/jXAIo+LodwV+o+lFRYlG9lgfx+tA4/hbRGzqVJ2oNsLXHD4im8HFo4kVDckDW3Ik3tVLRZF9liPQ/wA6AxKYi+kh/Co5uXJv5GrhsSm61qPzv9UdCbj6clb6Uvk48TtGfn/SuUY3jGJDGMM+YdL/AF1tWMFNiWJaTESKo3VT+J5fCs0ZQfRmviOElgjbnHy3/g6XieKncgL6mleJmeRlRdS97DlYbk+QqtHiIFtSWsLXJY2Oo1Oxpz2LDGR3dcv5sgE7+2L/AEt8qGfiOyg5JfLzMWOPaT038/IeLweMLYlmb72wv5Cg34Uw2dT6gj8L08kjqBxXhQ/yvFRfvfU9N8Dha5CCTBSLul/2SD/X6VFlHO49dPxp8xqJ25E6Vux/5acvfivLb9mefBKPuv6jvszxq47mRr2HhYnkPdJ/jVgOKX7y/MVzXHcNhcZsilxsfO3X+tV88ExTCwITzzA7baWP41f2qEt0hceCP+8q8r/lHSO2nB1xcBZSGaNgw2I09oc7HKxqq8IwGMiOuKAW1sgXMPm+x9NPWtexmJnwPfLOrTRyAewBdWAIvYnUEG3wo2HjELEAsVY6WZWGp5aixrfhnBrn9zPmqLcY7rxoMgiCKqi9lAGu+nM+dTRi9ahTW66ak2rSZxhFw9iL2r1WPBTKY1II2Gx8qzQDRRoBgpX7x50Y8s0bLbpsctMThUOsc6H0I/8AKuW9lezDImfKb2A3tqdTb4WptLgpF2zD601iUXocLJPicept/GpjgMOo8U6fvr/CubqZbkZj+6KT4RsXOXZcQUQMVW0aknLoTc+dx8K7UdR0/EDCj/NB9Ln8BUU/cpGXvc2NuSqNyTzawvVAj4ZMhEkmLlspBsVWzW1tlAueQt5imPFOPQNE0TuyFwysoUEprb74uflzrJmnknLTjLwioq5dfVjbj3HBFeOGKIRkDxBQxZSLtqb62vr51SjiAwdXIHQeh8t6rmMR0zLHiSyedx/t1A3OxoNcHiHuVu9t7DbQm5+RodjkSqT8wd1vU7LpgcfGegKgAjyGgOvLn8asnCuPwprnU25aHTY773vauSjg2MPuHXqyAfVq1PCcUBmOg0H6ROenJqzZeChkWlz2vp+yqz6G5QgtTVNu/wAHc4uN4dicssgHIAqcv7ykketSNjov/qQP20U/8WX8K4OeG4i1y2mo9sct9jypd3N9zXL/ABuGXpEVnzp+9+f2fRIxAI0kif0LKfqD+NQ4jEqBcsoHXOhH41wjBuF0v9TVy4ZgoBgg8t0SWR1zKt2JjW6x87Ak3+FQy8DjxVRrwZM2S7kvXrxLiOLK/wCjdSOuhv8AKi4sT4dQOexNaf8ApuIQRJIpyFFN0JBvlzBrqbg3ufhVc4pwKaGVGhnLwlgGDbjXXUeXUV2DhlkhqjshM83jlXPYsC4xm9iOQ+lh+JFB47FSSKVUMjEjxZlzDUXsQTY2vrXuGLIzEE5ddCxsPIA9aLm4U6BHZkI7yMWUNfVrbkAWrdHhYxaZj7WTAZOFR2zP9pcc/wDq3vr5Cw+tMMB2Z4e+qx5iNw7yFh6h2/pVjxfDVyAhRbOo+Z8zWZYFUgBTc/1/pWwkpOzHB8RkhRF0VAUA6BGKgfICvUHgT4WHSSUf/tavVxaiaGDIgXnufU6moJVo2U0MwpwCri+IEGHlmt7KkjzOwHxNqk4D9nghjiM0V1UXJddWOrHfmxJpZ2tjeaTD4KMgGUsz3BICIt7sAQSL2572qkdqOyP2VrGVXJW5yxkAa2C6sddL0HvsHbqdA7UcSRk7vDqs8tkZCsoFmV7kXB0J09bVQePxykpKcH3NwqEu8gs6jW9yL3Oubn1ovsZwuB0EuJzOCWVEvZbA2Z3HvDYBdr3vpVo7SQYWSPuApCjc5gSzbC2lgB0FYUscMjkubf8AZsWuUVE5fjoCiZmeG52VSzH18vnS6LESi4S4zaGw3H9mrmnZ2EbSIPW/8qmh4fEvMH0rS8iZy4fxZTe7xT/e+YH0FSpwvFN7x6+0d+thV6CoBoBqbbbaXpnw2RI42fJq1xqPdG5BrLl4jQm1Q3s8V4soeH7NSWs8zXPurffzudflVn7J/krGIb85I2Ue0Rp8Bvc760dwrGKHzsNbMeXtHaukdncYBBmAsSxv/YrNk4jKpqF/FlPZ4pcihcY/IpHqYcSyjowDfXSq3xTsdjYYPswkWSNX7xdCCDlym2p0I5V1/H8SJ0pNJLe9FZMkqsK0RW63+hTsP2lxEQiEkTtkQI1gbHKLK19bU1g7TQSB0ZWjdhYBgDc201W/1tTWBN/DegeKwrlJIFwCavw6WNaUtjNxMlktvwG/B3iyWDKb3O41oTF8ZLwhMuiyxHa3vXA0rEWEjK+wvyFCcSiCouQeJmAAvz36+ValkRk02PuL8bMaBjCLBg2pOuUg2pe/bEkZxEgy6gEnba1/jUfaXDTJCWecOBsvdqNbjnzqsniUndP4wmVC1wi8reVXXIh/sWvg2NM8TSEBS0kmi7DW+nz+teoDsNMzYdy7Zm75rmwF7pGRoNK9SNGgsriora1JiJVGhZQehIB+tK+I8ahiikk72MlVJCh1JJtoAL3pwCDBcPmxuOxE0UpjWIrArC+oAvJt52pJ+UI5GEKlnyrck6kk7Hz0qeHtEcLgYoIHBmkzPK6kHK0jZm25gED4GhcJxNV3CsSNWYMWY35k3pI03ZTs29xfw+XIsav4fANTtrry2q49qeOYJMHh0BIxIFzGFsSW2Z2Oy7233pZiu1AykCIHb2SQT5apoOXkKQmKJyFK+I2u2eygnoCvhAv1qXs8E7Xx/ZpjllSTATxZRcWJI8rioJON9Lj4UfxDCxElYwyxL4R957buxtrc625Cl0vDU2Gb489fSmjF1ZR5ZeJg8VOm9qwvF2vbNpQsnD11GYih5MDzDUssSkqYmuQ5HEvOr52O7XxhDHM1gSWB9dxXJGwzDzoriOBaEiM3DWBI6XFxUp4YuS8SqzSa3R2vE9osL/3kqJOPYcg2mT51w9IiaZRgLsfp/Oh2SQFDUr5eZ2CDjcBvaVD6MKC4lxBGBAYfOq3jsP3OFijGjSWZyNDa17XGo3A+FA4RRc6sTruxPLzNLjcXTRlzJK0X9eIRAfpU5+8N+lQzYlHKAEPoSpBFlf3WPW29qqmECE7aU+4dhM8Zye2HgC2Nj4pBcDpoCPQ08o6lSJxaW5Y+1LE4K7EFrC5GxYEAkfGudSNeGb/8Mo/2X/hXTe2eFy4WRABy0Bv0qkQ9npmw80mWwEbixNmN0Iso3JrXB0tzM13nRN+SeW+FlF9pR9Y0/lXqz+TPDdyksLyR94WVu6VryKFUK2dd1IJA9axQfMuU3EyNIx/zD7xY3t8Tck8q1WID3R8hQ7PltuNCx3Atucw5cvP51u0LNu5HUg6dbDz6n0FPSDqZKBQzz215a26sfLy/GtkTvCLXC25E+ydvUm2/rWs5GdY1XUaDTa4v8LD8QeVc0dqZl3Oi2GY6noB/E/yraQWBJ5VozhfFmBuRcgjRfv26aaeQqPmDmNgbAE313JP3iB9SBQRz3J0BtqNelYdrCg3LkhVZhcnc31569B/CtuKSZVCg6n8BSyY0QccYdCoW3gcyLcbMQBr10AoabiDsSzNck3JO5NBObm9YoKKRynQywGI/OJfa4J+GtWzA47h8k082NzFmkAjRc1soGrGxHluaokTEEHpXTew/ZTCz4VcRNGXd3fdmACqbaAEdDrS6O/q+AXl7lfErXarEYHNGcDmCkHOGzaMDpbN5edJ4cRc0z/KFwyHDYsxQKVXIhIuTZmuTa+trW0qthqZxGjmpUzo/H8cssiMNFy6D5fyoHCG9/j9bUhw3F1AGa5sOW/1o7hkb4qWNI2aIMW8V9bAXJsDtpb41lhj7OKvkhcj1t0WHDKFo2PEKI2XvALtFpmGuVgddeW9BSdjp1F/tpt5qx/8AlUQ7NYnZcYhPmh/lTLNi8SfZyLpjuJxNE9p856XXXKR01oj/ABVXiIBXmNGub200A/u1UMdmscPZniP+m3/wqRcDM11klygaFYxlHnooAPxBquOUJbRZJ4mmXbgcCGeabuVWWTMxfL4iufKfEQDqQCRWaTdnWZGyKzkBGAF9QCUIA8tDXqppaKJpFSMU2VmKAqBckOhFh6Mak+zS5cxhcKRe+Q2sRe/T50n4hgRG1r3+Fv40PLISMpLEHkWNvltVGcpMYYfExqMqurdTcEk+dFxsh+79Nb7/ADqudyvQVqcMvQj0JoVscpFk+zRtfwLrYHQagbD0rDYRBaygWvbTa+9qrn2a2zuPRqwyyDaZ/mf50KYdQ/7lbg2FwLDyHlVY4lPncnlsPSvNi5dR3jdKHaPneloLlaI8tZymvZazamENbV1/sjxJ48FAq4d7KLXYMoZnYnw+GzDXcVyICu0Yji0iQAobZI1sCARoABXJAZzj8oLStjZJJInizZcocWJVVC3HUXB2qt2q7/lRxLtNAHbN+av0tmY7AelU1ReuCRgVeOzHEIIjZo5mkIsthGAFGp3fUmqth8GGIF/pTjhUA+0Rry1/A1HNFSW40XRd04shG04/0X/4saJi4ijbNN/7Umn0pPJAqi+vzorAYkWyhbepvf1rF2UR9TGUXFYho0+X1Rx+I0pRxHiUXet3bGS+oCa79Tsut96xiosiM4J01t/Cqz/iDzMSbKOg6Dr1rRw2JRepCzlaocx8dMLiTQnUZQdNfvNz9AK9VcddTr89flXq160IoNn/2Q==" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="300px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNZAVzUhM5jBWlHQ1PXakMJaVaPztrfItV6w&usqp=CAU" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="300px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvNt7eivNvUQZhwrk9EBe9GQzYA4pefrYJew&usqp=CAU" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

   
        
   

                  <div class="row">
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
    <table class="class">
    <tr>
        <td>Name</td>
        <td><input type="text" class="form-control"> </td>
    </tr>
    <tr>
        <td>Roll no</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Admission no</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>College</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" class="form-control"></td>
    </tr>
    <tr>
        <td>Confirm password</td>
        <td><input type="password" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-success">REGISTER</button></td>
    </tr>
    </table>
    </div>



    <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
    <table class="class">
    <tr>
        <td>Username</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-success">LOGIN</button></td>
    </tr>
    </table>
    </div>


    <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Vision and mission
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>
                    To become a centre par excellence of learning,</strong> unique in experience, value based in its approach, and pioneering in its efforts for enriching and fulfilling LIFE.
                    To facilitate comprehensive and integrated development of individuals imbued with righteousness and courage of conviction, to effectively function as social beings
                     
                  

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 Accreditation
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong> NATIONAL ASSESSMENT AND ACCREDITATION COUNCIL (NAAC)</strong> 
                  ALL INDIA COUNCIL FOR TECHNICAL EDUCATION (AICTE)
                  MCA, MBA programmes at Rajagiri are accredited by AICTE(All India Council for Technical Education).
                  
                  THE ACCREDITATION COUNCIL FOR BUSINESS SCHOOLS AND PROGRAMS (ACBSP)
                  The MBA, MHRM  programs at Rajagiri are candidates for ACBSP accreditation, which is a leading specialized accreditation association for business education supporting, celebrating, and rewarding teaching excellence.

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                RTI
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>STATUTORY DECLARATION UNDER SEC-4(1)(B) OF RTI ACT 2005</strong>
                  ​Citizens can seek information regarding the activities of the college by submitting a written request with  Name, address, contact number and particulars of the information sought. The reason for seeking information need not be given. The duly signed request may be addressed to the Public Information Officer, Rajagiri College of Social Science, Rajagiri P.O, Kalamassery, Kochi - 683 104 along with the required fee of Rs.10/-. Copies of documents will be charged according to the rate fixed by the State Information Commission, Kerala.

 

                </div>
              </div>
            </div>
          </div>
    </div>



    </div>
    </div>

    
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>
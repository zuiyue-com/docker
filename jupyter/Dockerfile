FROM continuumio/miniconda3

RUN conda install jupyterlab -y --quiet

RUN mkdir -p /opt/notebooks

CMD jupyter-lab --allow-root --no-browser --ip='*' --port=8888
